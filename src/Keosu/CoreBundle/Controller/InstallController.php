<?php
/************************************************************************
 * Keosu is an open source CMS for mobile app
 * Copyright (C) 2014  Vincent Le Borgne, Pockeit
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 ************************************************************************/
namespace Keosu\CoreBundle\Controller;

use Keosu\CoreBundle\Util\StringUtil;

use Keosu\CoreBundle\Model\ConfigureModel;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Input\ArrayInput;

class InstallController extends Controller
{

    /**
     * Check PHP installation
     */
 	public function checkAction()
    {
        $phpversion = phpversion();
        $isPhpVersion = version_compare(phpversion(), '5.4.0');
        $isCurlInstall = function_exists('curl_version');
        $isJsonInstall = phpversion('json');
        $isCtypeInstall = function_exists('ctype_print');
        $isTimeZoneSet = (date_default_timezone_get() != null);
        return $this
            ->render('KeosuCoreBundle:Install:check.html.twig',
                array('phpversion' => $phpversion,
                    'isPhpVersion' => $isPhpVersion,
                    'isCurl' => $isCurlInstall,
                    'isJson' => $isJsonInstall,
                    'isCtype' => $isCtypeInstall,
                    'isTimeZone' => $isTimeZoneSet));
    }

    /**
     * Configure DataBase, BaseUrl
     */
    public function configureAction()
    {
        //Redirect to main page if parameters_custom.yml exists
        if (file_exists($this->getAppConfigPath() . 'parameters_custom.yml')) {
            return $this
                ->redirect(
                    $this
                        ->generateUrl(
                            'keosu_core_mainhomepage'));
        }
        $configuration = new ConfigureModel();
        $form = $this->createConfigurationForm($configuration);
        $request = $this->get('request');
        //If we are in POST method, form is submit
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                //Registering error handler to catch warning
                ErrorHandler::register();
                //Testion database parameters with configuration
                try {
                    $this->testAndCreateConnection($configuration);
                } catch (\Exception $e) {
                    return $this
                        ->render('KeosuCoreBundle:Install:configure.html.twig',
                            array('form' => $form->createView(), 'connectionerror' => true));
                }
                $this->configureUrl($configuration);
                //Generating parameters_cutom.yml
                $this->exportToYml($configuration);
                //Updating existing parameters.yml
                $this->updateParametersYml();
				//Update databaseSchema
				$this->updateSchema();
                return $this
                    ->redirect(
                        $this
                            ->generateUrl(
                                'keosu_core_install_installdb'));
            }
        }
        return $this
            ->render('KeosuCoreBundle:Install:configure.html.twig',
                array('form' => $form->createView(), 'connectionerror' => false));
    }

    /**
     * Configure DataBase, BaseUrl
     */
    public function installdbAction()
    {
        $this->updateSchema();
        return $this
            ->redirect(
                $this
                    ->generateUrl(
                        'keosu_core_mainhomepage'));
    }

    private function createConfigurationForm($configuration)
    {
        $formBuilder = $this
            ->createFormBuilder($configuration, array(
                'label' => 'database configuration'));

        $formBuilder->add('databaseHost', 'text', array('label' => false));
        $formBuilder->add('databaseName', 'text', array('label' => false));
        $formBuilder->add('databasePort', 'text', array('label' => false));
        $formBuilder->add('databaseUsername', 'text', array('label' => false));
        $formBuilder->add('databasePassword', 'password', array('required' => false, 'label' => false));
        $form = $formBuilder->getForm();
        return $form;
    }


	/*********************************************************
	 * Database methods
	 */

	//Test configuration, if configuration is ok we create the database
	//Else doctrine "classical" exception are sent
	private function testAndCreateConnection($configuration)
    {
        $connectionFactory = $this->container
            ->get('doctrine.dbal.connection_factory');
        $connection = $connectionFactory
            ->createConnection(
                array('driver' => $configuration->getDatabaseType(),
                    'user' => $configuration->getDatabaseUsername(),
                    'password' => $configuration->getDatabasePassword(),
                    'host' => $configuration->getDatabaseHost(),
                    'port' => $configuration->getDatabasePort()));
		$connection->getSchemaManager()->createDatabase($configuration->getDatabaseName());
		$connection->close();
    }
	//Update schema with console
	private function updateSchema()
	{
		$application = new Application($this->container->get('kernel'));
		$application->setAutoExit(false);
		//update Schema
		$options = array('command' => 'doctrine:schema:update', "--force" => true);
		$application->run(new \Symfony\Component\Console\Input\ArrayInput($options));
	}

	/*********************************************************
	 * Configuration files
	 */

	//Export configuration object to YML
    private function exportToYml($configuration)
    {
        $content =
            'parameters:' . PHP_EOL .
            '    database_driver: ' . $configuration->getDatabaseType() . PHP_EOL .
            '    database_host: ' . $configuration->getDatabaseHost() . PHP_EOL .
            '    database_port: ' . $configuration->getDatabasePort() . PHP_EOL .
            '    database_name: ' . $configuration->getDatabaseName() . PHP_EOL .
            '    database_user: ' . $configuration->getDatabaseUsername() . PHP_EOL .
            '    database_password: ' . $configuration->getDatabasePassword() . PHP_EOL .
            '    url_base: ' . $configuration->getUrlBase() . PHP_EOL .
            '    url_param: ' . $configuration->getUrlParam() . PHP_EOL;
        $this->writeFile($content, 'parameters_custom.yml');
    }

	//Update main parameters.yml file
    private function updateParametersYml()
    {
        $content =
            '#' . PHP_EOL .
            '# This file is used for initial configuration' . PHP_EOL .
            '# DO NOT MODIFY THIS FILE' . PHP_EOL .
            '# Use parameters_default.yml instead' . PHP_EOL .
            '#' . PHP_EOL .
            'imports:' . PHP_EOL .
            '    - { resource: parameters_default.yml }' . PHP_EOL .
            '    - { resource: parameters_custom.yml }' . PHP_EOL;
        $this->writeFile($content, 'parameters.yml');
    }

	//write a file in config dir
    private function writeFile($content, $fileName)
    {
        $fileName = $this->getAppConfigPath() . $fileName;
        if (file_exists($fileName)) {
            unlink($fileName);
        }
        $file = fopen($fileName, "x+");
        fwrite($file, $content);
        fclose($file);
    }

	//Compute the host of the app
    private function configureUrl($configuration)
    {
        $currentUrl = $this->getRequest()->getUri();
        $currentUrl = str_replace('/install/configure', '', $currentUrl);
        if (StringUtil::endsWith($currentUrl, '.php')) {
            $pos_param = strrpos($currentUrl, "/");
            $param = substr($currentUrl, $pos_param); //Get app_*.php
            //Adding a slash at the end
            if (!StringUtil::endsWith($currentUrl, '/')) {
                $param .= '/';
            }
            $pos_base = strrpos($currentUrl, "/");
            $base = substr($currentUrl, 0, $pos_base);
            $configuration->setUrlParam($param);
            $configuration->setUrlBase($base);
        } else {
            $configuration->setUrlParam('/');
            $configuration->setUrlBase($currentUrl);
        }
    }

    private function getAppConfigPath()
    {
        return __DIR__ . '/../../../../app/config/';
    }


}
