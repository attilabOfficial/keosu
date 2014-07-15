<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\AopBundle\JMSAopBundle(),
            new JMS\DiExtraBundle\JMSDiExtraBundle($this),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new Keosu\DataModel\ArticleModelBundle\KeosuDataModelArticleModelBundle(),
            new Keosu\CoreBundle\KeosuCoreBundle(),
            new Keosu\Gadget\ArticleGadgetBundle\KeosuGadgetArticleGadgetBundle(),
            new Mopa\Bundle\BootstrapBundle\MopaBootstrapBundle(),
            new Keosu\Gadget\LastArticleGadgetBundle\KeosuGadgetLastArticleGadgetBundle(),
            new Keosu\UserBundle\KeosuUserBundle(),
            new Keosu\Gadget\ChronoGadgetBundle\KeosuGadgetChronoGadgetBundle(),
            new Keosu\DataModel\MapModelBundle\KeosuDataModelMapModelBundle(),
           	new Keosu\Gadget\MapGadgetBundle\KeosuGadgetMapGadgetBundle(),
            new Keosu\Gadget\MenuGadgetBundle\KeosuGadgetMenuGadgetBundle(),
        	new Keosu\Reader\RssReaderBundle\KeosuReaderRssReaderBundle(),
			new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
        	new Keosu\Gadget\AroundMeGadgetBundle\KeosuGadgetAroundMeGadgetBundle(),
            new Keosu\DataModel\PictureModelBundle\KeosuDataModelPictureModelBundle(),
            new Keosu\Gadget\PictureGadgetBundle\KeosuGadgetPictureGadgetBundle(),
            new Keosu\Gadget\PicturesGalleryGadgetBundle\KeosuGadgetPicturesGalleryGadgetBundle(),
        	new Keosu\DataModel\EventModelBundle\KeosuDataModelEventModelBundle(),
        	new Keosu\Reader\icsReaderBundle\KeosuReadericsReaderBundle(),
        	new Keosu\Reader\RssEventReaderBundle\KeosuReaderRssEventReaderBundle(),
        	new Keosu\Gadget\CalendarGadgetBundle\KeosuGadgetCalendarGadgetBundle(),
            new Keosu\Gadget\AuthenticationGadgetBundle\KeosuGadgetAuthenticationGadgetBundle(),
            new Keosu\Gadget\MyAccountGadgetBundle\KeosuGadgetMyAccountGadgetBundle(),
            new Keosu\Gadget\CommentGadgetBundle\KeosuGadgetCommentGadgetBundle(),
            new Keosu\Plugin\PushPluginBundle\KeosuPluginPushPluginBundle(),
            new RMS\PushNotificationsBundle\RMSPushNotificationsBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test', 'local', 'testing'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
    
    /* for virtual machine */
    public function getCacheDir()
    {
        if (in_array($this->environment, array('dev', 'test'))) {
            return '/dev/shm/cache/' .  $this->environment;
        }

        return parent::getCacheDir();
    }

    public function getLogDir()
    {
        if (in_array($this->environment, array('dev', 'test'))) {
            return '/dev/shm/logs';
        }

        return parent::getLogDir();
    }/**/
}
