<?php
namespace Keosu\CoreBundle\Command;

use Keosu\CoreBundle\Service\PackageManager;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;

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

	protected function execute(InputInterface $input, OutputInterface $output)
	{

		
		if($input->getOption('watch')) {
		
			$key = 0;
		
			$kernel = $this->getContainer()->get('kernel');
			$pathPackage = $kernel->getRootDir().PackageManager::ROOT_DIR_PACKAGE;
	
			$finder = new Finder();
			$sort = function ($a, $b) {
				return ($b->getMTime() - $a->getMTime());
			};
			
			while(true) {

				$newKey = md5(file_get_contents($this->lastModifiedInFolder($pathPackage)));
				// action if there is a modification in packages
				if($newKey !== $key) {
					$key = $newKey;
					$output->writeln("[export]");
				}
				
				sleep($input->getOption('period'));
			}
		}
		
		
		//$output->writeln($files[$count-1]->getPathName());
		
		$appId = $input->getOption('app');

		$text = 'Hello';

		if ($input->getOption('watch')) {
			$text = strtoupper($text);
		}

		$output->writeln($text);
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
			throw new Exception("No files in the directory");
		}

		return $lastModifiedFile;
	}
}
