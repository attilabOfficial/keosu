<?php

namespace Keosu\Gadget\FormGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportConfigPackageEvent;

use Keosu\Gadget\FormGadgetBundle\KeosuGadgetFormGadgetBundle;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Listener responsible to gadget action
 */

class ExportListener implements EventSubscriberInterface
{

	private $container;

	public function __construct($container)
	{
		$this ->container= $container;
	}

	public static function getSubscribedEvents()
	{
		return array(
			KeosuEvents::PACKAGE_EXPORT_CONFIG.KeosuGadgetFormGadgetBundle::PACKAGE_NAME => 'onGadgetExport',
			);
	}

	function onGadgetExport(ExportConfigPackageEvent $event)
	{

    $config = $event->getCurrentConfig();
    $offline = $config['gadgetParam']['offline'];

    if($offline == true) {

      $id = $config['gadgetParam']['form-id'];
      $em = $this->container->get('doctrine')->getManager();
      $repo = $em->getRepository('KeosuDataModelFormModelBundle:Form');
      $form = $repo->find($id);

      $returnedForm = array(
				'id' => $form->getId(),
				'dataModelObjectName' => $form->getDataModelObjectName(),
				'name' => $form->getTitle()
			);

			$fields = $form->getFields();
			if(count($fields) > 0){
				foreach ($fields as $q => $field){
					$returnedForm['fields'][$q] = array(
						'id' => $field->getId(),
						'type' => $field->getType(),
						'text' => $field->getText(),
						'required' => $field->getRequired()
					);
				}
			}

      $this->writeFile(json_encode($returnedForm), 'form-'.$id.'.json','/simulator/www/data/');

		}

	}

  //write a file
  private function writeFile($html, $fileName, $path)
  {
      //Writting the html content in file
      $destiPath = $this->getExportAbsolutePath() . $path;

      $fileName = $destiPath . $fileName;

      if (file_exists($fileName)) {
          unlink($fileName);
      }
      $file = fopen($fileName, "x+");
      fwrite($file, $html);
      fclose($file);
  }

  /**
   * Return dir where to export app
   */
  private function getExportAbsolutePath() {
      $kernel = $this->container->get('kernel');
      return $kernel->getRootDir().'/../web/keosu/export/';
  }
}
