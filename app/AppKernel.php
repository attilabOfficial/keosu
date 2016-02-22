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
            new Keosu\DataModel\LocationModelBundle\KeosuDataModelLocationModelBundle(),
            new Keosu\Gadget\MapGadgetBundle\KeosuGadgetMapGadgetBundle(),
            new Keosu\Gadget\MenuGadgetBundle\KeosuGadgetMenuGadgetBundle(),
			new Keosu\Gadget\SearchGadgetBundle\KeosuGadgetSearchGadgetBundle(),
            new Keosu\Reader\RssReaderBundle\KeosuReaderRssReaderBundle(),
            new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new Keosu\Gadget\AroundMeGadgetBundle\KeosuGadgetAroundMeGadgetBundle(),
            new Keosu\DataModel\PictureModelBundle\KeosuDataModelPictureModelBundle(),
            new Keosu\Gadget\PictureGadgetBundle\KeosuGadgetPictureGadgetBundle(),
            new Keosu\Gadget\PicturesGalleryGadgetBundle\KeosuGadgetPicturesGalleryGadgetBundle(),
            new Keosu\DataModel\EventModelBundle\KeosuDataModelEventModelBundle(),
            new Keosu\Reader\IcsReaderBundle\KeosuReaderIcsReaderBundle(),
            new Keosu\Reader\RssEventReaderBundle\KeosuReaderRssEventReaderBundle(),
            new Keosu\Gadget\CalendarGadgetBundle\KeosuGadgetCalendarGadgetBundle(),
            new Keosu\Gadget\AuthenticationGadgetBundle\KeosuGadgetAuthenticationGadgetBundle(),
            new Keosu\Gadget\MyAccountGadgetBundle\KeosuGadgetMyAccountGadgetBundle(),
            new Keosu\Gadget\CommentGadgetBundle\KeosuGadgetCommentGadgetBundle(),
            new Keosu\Gadget\FaceBookBundle\KeosuGadgetFaceBookBundle(),
            new Keosu\Gadget\BaseBundle\KeosuGadgetBaseBundle(),
            new RMS\PushNotificationsBundle\RMSPushNotificationsBundle(),
            new Keosu\Gadget\PushNotificationBundle\KeosuGadgetPushNotificationBundle(),
            new Fkr\SimplePieBundle\FkrSimplePieBundle(),
            new Keosu\Gadget\ContactUsGadgetBundle\KeosuGadgetContactUsGadgetBundle(),
            new Keosu\DataModel\SearchModelBundle\KeosuDataModelSearchModelBundle(),
            new Keosu\DataModel\MenuModelBundle\KeosuDataModelMenuModelBundle(),
            new Keosu\DataModel\QuizzModelBundle\KeosuDataModelQuizzModelBundle(),
            new Keosu\Gadget\QuizzGadgetBundle\KeosuGadgetQuizzGadgetBundle(),
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
}
