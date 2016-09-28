<?php

namespace Keosu\Gadget\ArticleGadgetBundle\EventListener;

use Keosu\CoreBundle\KeosuEvents;
use Keosu\CoreBundle\Event\ExportConfigPackageEvent;

use Keosu\Gadget\ArticleGadgetBundle\KeosuGadgetArticleGadgetBundle;

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
			KeosuEvents::PACKAGE_EXPORT_CONFIG.KeosuGadgetArticleGadgetBundle::PACKAGE_NAME => 'onGadgetExport',
			);
	}

	function onGadgetExport(ExportConfigPackageEvent $event)
	{
        $config = $event->getCurrentConfig();
        $offline = $config['gadgetParam']['offline'];

        if ($offline == true) {
            $id = $config['gadgetParam']['article-id'];
            $em = $this->container->get('doctrine')->getManager();
            $repo = $em->getRepository('KeosuDataModelArticleModelBundle:ArticleBody');
            $article = $repo->find($id);

            $returnedArticle = array(
                'id' => $article->getId(),
                'dataModelObjectName' => $article->getDataModelObjectName(),
                'title' => $article->getTitle(),
                'enableComments' => $article->getEnableComments(),
                'content' => $article->getBody(),
				'attachments' => array()

			);
            $attachments = $article->getAttachments();
            if (count($attachments) > 0){
                foreach ($attachments as $key=>$attachment){
                    $returnedArticle['attachments'][$key]['path'] =  $this->container->getParameter('url_base') . $attachment->getWebPath();
                }
            }

            $this->writeFile(json_encode($returnedArticle), 'article'.$id.'.json','/simulator/www/data/');
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






