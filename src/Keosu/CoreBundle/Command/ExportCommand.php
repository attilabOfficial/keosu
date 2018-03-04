<?php
namespace Keosu\CoreBundle\Command;

use Keosu\CoreBundle\Service\PackageManager;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ExportCommand extends ContainerAwareCommand
{
	protected function configure()
	{
		$this
			->setName('keosu:export')
			->setDescription('Export a keosu app')
			->addOption('app',null,InputOption::VALUE_REQUIRED,'Id of the app you want to export')
			->addOption('watch',null,InputOption::VALUE_NONE,'If set, the application will self export if there is modification in app/Resources/package folder')
			->addOption('period', null, InputOption::VALUE_REQUIRED, 'Set the polling period in seconds', 1)
		;
	}

	protected function execute(InputInterface $input, OutputInterface $stdout)
	{
		$em = $this->getContainer()->get('doctrine')->getManager();
		$watch = null;
		if($input->getOption('watch')) {
			$watch = true;
		}
		$appId = null;
		if($input->getOption('app')) {
			$appId = $input->getOption('app');
		}
		
		$stdout->writeln('The <info>keosu:export</info> task export your app');
		
		if($appId === null) {
			$stdout->writeln('List of available apps : ');
			$apps = $em->getRepository('KeosuCoreBundle:App')->findAll();
			foreach($apps as $app) {
				$stdout->writeln('['.$app->getId().'] '.$app->getName());
			}
			$appId = $this->getHelper('dialog')->askAndValidate(
				$stdout,
				'Which app would you like to export ? (number) : ',
				function($appId) {
					if (empty($appId)) {
						throw new \Exception('AppId can not be empty');
					}
						return $appId;
					}
				);
		}
		
		if($watch === null) {
			$stdout->writeln('<info>You can enable auto export with the option --watch</info>');
		}
		
		if($watch) {

			$key = null;

			$kernel = $this->getContainer()->get('kernel');
			$pathPackage = $kernel->getRootDir().PackageManager::ROOT_DIR_PACKAGE;

			while(true) {
				$newKey = md5(file_get_contents($this->lastModifiedInFolder($pathPackage)));
				// action if there is a modification in packages
				if($newKey !== $key) {
					$key = $newKey;
					$this->exportAction($appId,$stdout);
				}
				sleep($input->getOption('period'));
			}
		} else {
			$this->exportAction($appId,$stdout);
		}
	}
	
	private function exportAction($appId,OutputInterface $stdout)
	{
		$em = $this->getContainer()->get('doctrine')->getManager();
		$app = $em->getRepository('KeosuCoreBundle:App')->find($appId);
		if($app === null) {
			throw new \Exception('<error>[error]</error> You must provide a valid appId');
		}
	
		try {
			$exporter = $this->getContainer()->get('keosu_core.exporter');
			$manager = $this->getContainer()->get('keosu_core.package_manager');
			$manager->checkAllPackages();
			$exporter->export($app->getId());
			$stdout->writeln('<comment>'.date('H:i:s').'</comment> <info>[success]</info> '.$app->getName().' exported');
		} catch(\Exception $e) {
			$stdout->writeln('<comment>'.date('H:i:s').'</comment> <error>[error]</error> '.$app->getName().' failed to export because '.$e->getMessage());
		}
	}

	/**
	 * @see http://stackoverflow.com/a/21309546
	 */
	private function lastModifiedInFolder($folderPath) {

		/* First we set up the iterator */
		$iterator = new \RecursiveDirectoryIterator($folderPath);
		$directoryIterator = new \RecursiveIteratorIterator($iterator);

		/* Sets a var to receive the last modified filename */
		$lastModifiedFile = "";

		/* Then we walk through all the files inside all folders in the base folder */
		foreach ($directoryIterator as $name => $object) {
			/* In the first iteration, we set the $lastModified */
			$endPath = substr($name,-1);
			if($endPath !== '.' && $endPath !== '~')
				if(empty($lastModifiedFile)) {
					$lastModifiedFile = $name;
				}
				else {
					$dateModifiedCandidate = filemtime($lastModifiedFile);
					$dateModifiedCurrent = filemtime($name);

					/* If the file we thought to be the last modified 
					was modified before the current one, then we set it to the current */
					if ($dateModifiedCandidate < $dateModifiedCurrent) {
						$lastModifiedFile = $name;
					}
				}
		}
		/* If the $lastModifiedFile isn't set, there were no files
		we throw an exception */
		if (empty($lastModifiedFile)) {
			throw new \Exception("No files in the directory");
		}

		return $lastModifiedFile;
	}
}
