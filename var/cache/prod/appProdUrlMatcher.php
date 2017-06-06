<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/content')) {
            if (0 === strpos($pathinfo, '/content/menu')) {
                // keosu_menu_viewlist
                if ($pathinfo === '/content/menu') {
                    return array (  '_controller' => 'Keosu\\DataModel\\MenuModelBundle\\Controller\\ViewController::viewAction',  '_route' => 'keosu_menu_viewlist',);
                }

                // keosu_menu_delete
                if (0 === strpos($pathinfo, '/content/menu/delete') && preg_match('#^/content/menu/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_menu_delete')), array (  '_controller' => 'Keosu\\DataModel\\MenuModelBundle\\Controller\\EditController::deleteAction',));
                }

                // keosu_menu_edit
                if (0 === strpos($pathinfo, '/content/menu/edit') && preg_match('#^/content/menu/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_menu_edit')), array (  '_controller' => 'Keosu\\DataModel\\MenuModelBundle\\Controller\\EditController::editAction',));
                }

                // keosu_menu_add
                if ($pathinfo === '/content/menu/add') {
                    return array (  '_controller' => 'Keosu\\DataModel\\MenuModelBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_menu_add',);
                }

            }

            if (0 === strpos($pathinfo, '/content/search')) {
                // keosu_search_viewlist
                if (rtrim($pathinfo, '/') === '/content/search') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'keosu_search_viewlist');
                    }

                    return array (  '_controller' => 'Keosu\\DataModel\\SearchModelBundle\\Controller\\ViewController::viewAction',  '_route' => 'keosu_search_viewlist',);
                }

                // keosu_search_delete
                if (0 === strpos($pathinfo, '/content/search/delete') && preg_match('#^/content/search/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_search_delete')), array (  '_controller' => 'Keosu\\DataModel\\SearchModelBundle\\Controller\\EditController::deleteAction',));
                }

                // keosu_search_edit
                if (0 === strpos($pathinfo, '/content/search/edit') && preg_match('#^/content/search/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_search_edit')), array (  '_controller' => 'Keosu\\DataModel\\SearchModelBundle\\Controller\\EditController::editAction',));
                }

                // keosu_search_add
                if ($pathinfo === '/content/search/add') {
                    return array (  '_controller' => 'Keosu\\DataModel\\SearchModelBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_search_add',);
                }

            }

        }

        // keosu_gadget_push_notification_homepage
        if ($pathinfo === '/view/push/plugin/sendPushNotification') {
            return array (  '_controller' => 'Keosu\\Gadget\\PushNotificationBundle\\Controller\\DefaultController::sendPushNotificationAction',  '_route' => 'keosu_gadget_push_notification_homepage',);
        }

        if (0 === strpos($pathinfo, '/service')) {
            // keosu_service_push_notification_add_device
            if (0 === strpos($pathinfo, '/service/push/plugin/addDevice') && preg_match('#^/service/push/plugin/addDevice/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_service_push_notification_add_device')), array (  '_controller' => 'Keosu\\Gadget\\PushNotificationBundle\\Controller\\ServiceController::registerDeviceAction',));
            }

            // keosu_gadget_comment_service
            if (0 === strpos($pathinfo, '/service/gadget/comment') && preg_match('#^/service/gadget/comment/(?P<dataModelObjectName>[^/]++)/(?P<idDataModel>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_comment_service')), array (  '_controller' => 'Keosu\\Gadget\\CommentGadgetBundle\\Controller\\ServiceController::commentAction',));
            }

        }

        if (0 === strpos($pathinfo, '/views/page/gadget/myaccount')) {
            // keosu_gadget_my_account_gadget_add
            if (0 === strpos($pathinfo, '/views/page/gadget/myaccountgadget/add') && preg_match('#^/views/page/gadget/myaccountgadget/add/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_my_account_gadget_add')), array (  '_controller' => 'KeosuGadgetMyAccountGadgetBundle:Edit:add',));
            }

            // keosu_gadget_my_account_gadget_edit
            if (0 === strpos($pathinfo, '/views/page/gadget/myaccount/edit') && preg_match('#^/views/page/gadget/myaccount/edit/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_my_account_gadget_edit')), array (  '_controller' => 'KeosuGadgetMyAccountGadgetBundle:Edit:edit',));
            }

        }

        if (0 === strpos($pathinfo, '/service/gadget/myaccount')) {
            // keosu_gadget_my_account_gadget_info
            if ($pathinfo === '/service/gadget/myaccount/info') {
                return array (  '_controller' => 'Keosu\\Gadget\\MyAccountGadgetBundle\\Controller\\ServiceController::infoAction',  '_route' => 'keosu_gadget_my_account_gadget_info',);
            }

            // keosu_gadget_my_account_gadget_password
            if ($pathinfo === '/service/gadget/myaccount/password') {
                return array (  '_controller' => 'Keosu\\Gadget\\MyAccountGadgetBundle\\Controller\\ServiceController::passwordAction',  '_route' => 'keosu_gadget_my_account_gadget_password',);
            }

        }

        if (0 === strpos($pathinfo, '/views/page/gadget/authenticationgadget')) {
            // keosu_gadget_authentication_gadget_add
            if (0 === strpos($pathinfo, '/views/page/gadget/authenticationgadget/add') && preg_match('#^/views/page/gadget/authenticationgadget/add/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_gadget_add')), array (  '_controller' => 'KeosuGadgetAuthenticationGadgetBundle:Edit:add',));
            }

            // keosu_gadget_authentication_gadget_edit
            if (0 === strpos($pathinfo, '/views/page/gadget/authenticationgadget/edit') && preg_match('#^/views/page/gadget/authenticationgadget/edit/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_gadget_edit')), array (  '_controller' => 'KeosuGadgetAuthenticationGadgetBundle:Edit:edit',));
            }

        }

        // keosu_gadget_authentication_reset_success
        if ($pathinfo === '/resetting/success') {
            return array (  '_controller' => 'Keosu\\Gadget\\AuthenticationGadgetBundle\\Controller\\ResetController::successAction',  '_route' => 'keosu_gadget_authentication_reset_success',);
        }

        if (0 === strpos($pathinfo, '/service/gadget/authentication')) {
            // keosu_gadget_authentication_service_init
            if (preg_match('#^/service/gadget/authentication/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)/init$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_service_init')), array (  '_controller' => 'Keosu\\Gadget\\AuthenticationGadgetBundle\\Controller\\ServiceController::initAction',));
            }

            // keosu_gadget_authentication_service_loginInit
            if (preg_match('#^/service/gadget/authentication/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)/loginInit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_service_loginInit')), array (  '_controller' => 'Keosu\\Gadget\\AuthenticationGadgetBundle\\Controller\\ServiceController::loginInitAction',));
            }

            // keosu_gadget_authentication_service_logout
            if (preg_match('#^/service/gadget/authentication/(?P<gadgetId>[^/]++)/logout$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_service_logout')), array (  '_controller' => 'Keosu\\Gadget\\AuthenticationGadgetBundle\\Controller\\ServiceController::logoutAction',));
            }

            // keosu_gadget_authentication_service_register
            if (preg_match('#^/service/gadget/authentication/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)/register$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_service_register')), array (  '_controller' => 'Keosu\\Gadget\\AuthenticationGadgetBundle\\Controller\\ServiceController::registerAction',));
            }

            // keosu_gadget_authentication_service_forgotPassword
            if (preg_match('#^/service/gadget/authentication/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)/forgotPassword$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_authentication_service_forgotPassword')), array (  '_controller' => 'Keosu\\Gadget\\AuthenticationGadgetBundle\\Controller\\ServiceController::forgotPasswordAction',));
            }

        }

        if (0 === strpos($pathinfo, '/views/page/gadget/picturesgallerygadget')) {
            // keosu_gadget_pictures_gallery_gadget_add
            if (0 === strpos($pathinfo, '/views/page/gadget/picturesgallerygadget/add') && preg_match('#^/views/page/gadget/picturesgallerygadget/add/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_pictures_gallery_gadget_add')), array (  '_controller' => 'KeosuGadgetPicturesGalleryGadgetBundle:Edit:add',));
            }

            // keosu_gadget_pictures_gallery_gadget_edit
            if (0 === strpos($pathinfo, '/views/page/gadget/picturesgallerygadget/edit') && preg_match('#^/views/page/gadget/picturesgallerygadget/edit/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_pictures_gallery_gadget_edit')), array (  '_controller' => 'KeosuGadgetPicturesGalleryGadgetBundle:Edit:edit',));
            }

        }

        if (0 === strpos($pathinfo, '/service/gadget/picture')) {
            // keosu_gadget_pictures_gallery_service
            if (0 === strpos($pathinfo, '/service/gadget/picturesgallery') && preg_match('#^/service/gadget/picturesgallery/(?P<gadgetId>[^/]++)/(?P<offset>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_pictures_gallery_service')), array (  '_controller' => 'Keosu\\Gadget\\PicturesGalleryGadgetBundle\\Controller\\ServiceController::viewListAction',));
            }

            // keosu_gadget_picture_service
            if (preg_match('#^/service/gadget/picture/(?P<gadgetId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_picture_service')), array (  '_controller' => 'Keosu\\Gadget\\PictureGadgetBundle\\Controller\\ServiceController::viewOneAction',));
            }

        }

        if (0 === strpos($pathinfo, '/content/picture')) {
            // keosu_picture_viewlist
            if (rtrim($pathinfo, '/') === '/content/picture') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'keosu_picture_viewlist');
                }

                return array (  '_controller' => 'Keosu\\DataModel\\PictureModelBundle\\Controller\\ViewController::viewAction',  '_route' => 'keosu_picture_viewlist',);
            }

            // keosu_picture_delete
            if (0 === strpos($pathinfo, '/content/picture/delete') && preg_match('#^/content/picture/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_picture_delete')), array (  '_controller' => 'Keosu\\DataModel\\PictureModelBundle\\Controller\\EditController::deleteAction',));
            }

            // keosu_picture_edit
            if (0 === strpos($pathinfo, '/content/picture/edit') && preg_match('#^/content/picture/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_picture_edit')), array (  '_controller' => 'Keosu\\DataModel\\PictureModelBundle\\Controller\\EditController::editAction',));
            }

            // keosu_picture_add
            if ($pathinfo === '/content/picture/add') {
                return array (  '_controller' => 'Keosu\\DataModel\\PictureModelBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_picture_add',);
            }

        }

        // keosu_gadget_aroundme_service
        if (0 === strpos($pathinfo, '/service/gadget/aroundme') && preg_match('#^/service/gadget/aroundme/(?P<gadgetId>[^/]++)/(?P<lat>[^/]++)/(?P<lng>[^/]++)/(?P<offset>[^/]++)/(?P<limit>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_aroundme_service')), array (  '_controller' => 'Keosu\\Gadget\\AroundMeGadgetBundle\\Controller\\ServiceController::viewListAction',));
        }

        if (0 === strpos($pathinfo, '/content/reader/manage')) {
            // keosu_ReaderManager_RssReader_add
            if ($pathinfo === '/content/reader/manage/add/rss') {
                return array (  '_controller' => 'Keosu\\Reader\\RssReaderBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_ReaderManager_RssReader_add',);
            }

            // keosu_ReaderManager_RssReader_edit
            if (0 === strpos($pathinfo, '/content/reader/manage/edit/rss') && preg_match('#^/content/reader/manage/edit/rss/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_RssReader_edit')), array (  '_controller' => 'Keosu\\Reader\\RssReaderBundle\\Controller\\EditController::editAction',));
            }

        }

        if (0 === strpos($pathinfo, '/sync/rss')) {
            // keosu_ReaderManager_RssReader_sync
            if (preg_match('#^/sync/rss/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_RssReader_sync')), array (  '_controller' => 'Keosu\\Reader\\RssReaderBundle\\Controller\\SyncController::syncAction',));
            }

            // keosu_ReaderManager_RssReader_syncAll
            if ($pathinfo === '/sync/rss') {
                return array (  '_controller' => 'Keosu\\Reader\\RssReaderBundle\\Controller\\SyncController::syncAllAction',  '_route' => 'keosu_ReaderManager_RssReader_syncAll',);
            }

        }

        if (0 === strpos($pathinfo, '/content/reader')) {
            if (0 === strpos($pathinfo, '/content/reader/manage')) {
                // keosu_ReaderManager_icsReader_add
                if ($pathinfo === '/content/reader/manage/add/ics') {
                    return array (  '_controller' => 'KeosuReadericsReaderBundle:Edit:add',  '_route' => 'keosu_ReaderManager_icsReader_add',);
                }

                // keosu_ReaderManager_icsReader_edit
                if (0 === strpos($pathinfo, '/content/reader/manage/edit/ics') && preg_match('#^/content/reader/manage/edit/ics/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_icsReader_edit')), array (  '_controller' => 'KeosuReadericsReaderBundle:Edit:edit',));
                }

            }

            // keosu_ReaderManager_icsReader_sync
            if (0 === strpos($pathinfo, '/content/reader/sync/ics') && preg_match('#^/content/reader/sync/ics/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_icsReader_sync')), array (  '_controller' => 'KeosuReadericsReaderBundle:Sync:sync',));
            }

            if (0 === strpos($pathinfo, '/content/reader/manage')) {
                // keosu_ReaderManager_RssEventReader_add
                if ($pathinfo === '/content/reader/manage/add/eventrss') {
                    return array (  '_controller' => 'Keosu\\Reader\\RssEventReaderBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_ReaderManager_RssEventReader_add',);
                }

                // keosu_ReaderManager_RssEventReader_edit
                if (0 === strpos($pathinfo, '/content/reader/manage/edit/eventrss') && preg_match('#^/content/reader/manage/edit/eventrss/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_RssEventReader_edit')), array (  '_controller' => 'Keosu\\Reader\\RssEventReaderBundle\\Controller\\EditController::editAction',));
                }

            }

            // keosu_ReaderManager_RssEventReader_sync
            if (0 === strpos($pathinfo, '/content/reader/sync/eventrss') && preg_match('#^/content/reader/sync/eventrss/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_RssEventReader_sync')), array (  '_controller' => 'Keosu\\Reader\\RssEventReaderBundle\\Controller\\SyncController::syncAction',));
            }

        }

        if (0 === strpos($pathinfo, '/views/page/gadget/lastarticlegadget')) {
            // keosu_gadget_last_article_gadget_add
            if (0 === strpos($pathinfo, '/views/page/gadget/lastarticlegadget/add') && preg_match('#^/views/page/gadget/lastarticlegadget/add/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_last_article_gadget_add')), array (  '_controller' => 'KeosuGadgetLastArticleGadgetBundle:Edit:add',));
            }

            // keosu_gadget_last_article_gadget_edit
            if (0 === strpos($pathinfo, '/views/page/gadget/lastarticlegadget/edit') && preg_match('#^/views/page/gadget/lastarticlegadget/edit/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_last_article_gadget_edit')), array (  '_controller' => 'KeosuGadgetLastArticleGadgetBundle:Edit:edit',));
            }

        }

        // keosu_gadget_last_article_service
        if (0 === strpos($pathinfo, '/service/gadget/lastarticle') && preg_match('#^/service/gadget/lastarticle/(?P<gadgetId>[^/]++)/(?P<page>[^/]++)/(?P<format>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'keosu_gadget_last_article_service');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_last_article_service')), array (  '_controller' => 'Keosu\\Gadget\\LastArticleGadgetBundle\\Controller\\ServiceController::viewListAction',));
        }

        if (0 === strpos($pathinfo, '/views/page/gadget/articlegadget')) {
            // keosu_gadget_article_gadget_add
            if (0 === strpos($pathinfo, '/views/page/gadget/articlegadget/add') && preg_match('#^/views/page/gadget/articlegadget/add/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_article_gadget_add')), array (  '_controller' => 'KeosuGadgetArticleGadgetBundle:Edit:add',));
            }

            // keosu_gadget_article_gadget_edit
            if (0 === strpos($pathinfo, '/views/page/gadget/articlegadget/edit') && preg_match('#^/views/page/gadget/articlegadget/edit/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_article_gadget_edit')), array (  '_controller' => 'KeosuGadgetArticleGadgetBundle:Edit:edit',));
            }

            // keosu_gadget_article_gadget_viewtable
            if ($pathinfo === '/views/page/gadget/articlegadget/viewtable') {
                return array (  '_controller' => 'KeosuGadgetArticleGadgetBundle:Edit:viewArticleTable',  '_route' => 'keosu_gadget_article_gadget_viewtable',);
            }

        }

        if (0 === strpos($pathinfo, '/service/gadget')) {
            // keosu_gadget_article_service
            if (0 === strpos($pathinfo, '/service/gadget/article') && preg_match('#^/service/gadget/article/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_article_service')), array (  '_controller' => 'Keosu\\Gadget\\ArticleGadgetBundle\\Controller\\ServiceController::viewOneAction',));
            }

            // keosu_gadget_map_gadget_service_view
            if (0 === strpos($pathinfo, '/service/gadget/mapgadget') && preg_match('#^/service/gadget/mapgadget/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_map_gadget_service_view')), array (  '_controller' => 'Keosu\\Gadget\\MapGadgetBundle\\Controller\\ServiceController::viewOneAction',));
            }

        }

        if (0 === strpos($pathinfo, '/views/layout/gadget/eventgadget')) {
            // keosu_gadget_calendar_gadget_add
            if (0 === strpos($pathinfo, '/views/layout/gadget/eventgadget/add') && preg_match('#^/views/layout/gadget/eventgadget/add/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_calendar_gadget_add')), array (  '_controller' => 'KeosuGadgetCalendarGadgetBundle:Edit:add',));
            }

            // keosu_gadget_calendar_gadget_edit
            if (0 === strpos($pathinfo, '/views/layout/gadget/eventgadget/edit') && preg_match('#^/views/layout/gadget/eventgadget/edit/(?P<page>[^/]++)/(?P<zone>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_calendar_gadget_edit')), array (  '_controller' => 'KeosuGadgetCalendarGadgetBundle:Edit:edit',));
            }

        }

        if (0 === strpos($pathinfo, '/service/gadget/calendar')) {
            // keosu_gadget_calendar_gadget_service_viewone
            if (0 === strpos($pathinfo, '/service/gadget/calendar/view') && preg_match('#^/service/gadget/calendar/view/(?P<eventid>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_calendar_gadget_service_viewone')), array (  '_controller' => 'Keosu\\Gadget\\CalendarGadgetBundle\\Controller\\ServiceController::viewoneAction',));
            }

            // keosu_gadget_calendar_gadget_service_view
            if (preg_match('#^/service/gadget/calendar/(?P<gadgetId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_calendar_gadget_service_view')), array (  '_controller' => 'Keosu\\Gadget\\CalendarGadgetBundle\\Controller\\ServiceController::viewlistAction',));
            }

            // keosu_gadget_calendar_gadget_service_viewtable
            if (preg_match('#^/service/gadget/calendar/(?P<gadgetId>[^/]++)/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_calendar_gadget_service_viewtable')), array (  '_controller' => 'Keosu\\Gadget\\CalendarGadgetBundle\\Controller\\ServiceController::viewtableAction',));
            }

        }

        // keosu_core_mainhomepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'keosu_core_mainhomepage');
            }

            return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\MainViewsController::contentAction',  '_route' => 'keosu_core_mainhomepage',);
        }

        if (0 === strpos($pathinfo, '/con')) {
            // keosu_core_configuration
            if ($pathinfo === '/configuration') {
                return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\MainViewsController::configurationAction',  '_route' => 'keosu_core_configuration',);
            }

            // keosu_core_homepage
            if ($pathinfo === '/content') {
                return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\MainViewsController::contentAction',  'appid' => 0,  '_route' => 'keosu_core_homepage',);
            }

        }

        // keosu_core_page
        if ($pathinfo === '/views') {
            return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\MainViewsController::pageAction',  '_route' => 'keosu_core_page',);
        }

        // keosu_core_publish
        if ($pathinfo === '/publish') {
            return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\MainViewsController::publishAction',  '_route' => 'keosu_core_publish',);
        }

        if (0 === strpos($pathinfo, '/views/page')) {
            // keosu_core_views_page_check
            if ($pathinfo === '/views/page/check') {
                return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManagePagesController::checkIsMainAction',  '_route' => 'keosu_core_views_page_check',);
            }

            if (0 === strpos($pathinfo, '/views/page/manage')) {
                // keosu_core_views_page_manage
                if ($pathinfo === '/views/page/manage') {
                    return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManagePagesController::viewAction',  '_route' => 'keosu_core_views_page_manage',);
                }

                // keosu_core_views_page_manage_add
                if ($pathinfo === '/views/page/manage/add') {
                    return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManagePagesController::addAction',  '_route' => 'keosu_core_views_page_manage_add',);
                }

                // keosu_core_views_page_manage_edit
                if (0 === strpos($pathinfo, '/views/page/manage/edit') && preg_match('#^/views/page/manage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_core_views_page_manage_edit')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManagePagesController::editAction',));
                }

                // keosu_core_views_page_manage_delete
                if (0 === strpos($pathinfo, '/views/page/manage/delete') && preg_match('#^/views/page/manage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_core_views_page_manage_delete')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManagePagesController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/configuration')) {
            if (0 === strpos($pathinfo, '/configuration/app/manage')) {
                // keosu_core_app_manage
                if ($pathinfo === '/configuration/app/manage') {
                    return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageAppsController::viewAction',  '_route' => 'keosu_core_app_manage',);
                }

                // keosu_core_app_manage_add
                if ($pathinfo === '/configuration/app/manage/add') {
                    return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageAppsController::addAction',  '_route' => 'keosu_core_app_manage_add',);
                }

                // keosu_core_app_manage_edit
                if (0 === strpos($pathinfo, '/configuration/app/manage/edit') && preg_match('#^/configuration/app/manage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_core_app_manage_edit')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageAppsController::editAction',));
                }

            }

            if (0 === strpos($pathinfo, '/configuration/theme/manage')) {
                // keosu_core_theme_manage
                if ($pathinfo === '/configuration/theme/manage') {
                    return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageThemesController::viewAction',  '_route' => 'keosu_core_theme_manage',);
                }

                // keosu_core_theme_manage_add
                if ($pathinfo === '/configuration/theme/manage/add') {
                    return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageThemesController::addAction',  '_route' => 'keosu_core_theme_manage_add',);
                }

                // keosu_core_theme_manage_edit
                if (0 === strpos($pathinfo, '/configuration/theme/manage/edit') && preg_match('#^/configuration/theme/manage/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_core_theme_manage_edit')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageThemesController::editAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/views/page')) {
            // keosu_core_views_page
            if (preg_match('#^/views/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_core_views_page')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageGadgetsController::viewAction',));
            }

            if (0 === strpos($pathinfo, '/views/page/gadget')) {
                // keosu_gadget_add
                if (0 === strpos($pathinfo, '/views/page/gadget/add') && preg_match('#^/views/page/gadget/add/(?P<gadgetName>[^/]++)/(?P<pageId>[^/]++)/(?P<zoneName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_add')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageGadgetsController::addAction',));
                }

                // keosu_gadget_edit
                if (0 === strpos($pathinfo, '/views/page/gadget/edit') && preg_match('#^/views/page/gadget/edit/(?P<pageId>[^/]++)/(?P<zoneName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_edit')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageGadgetsController::editAction',));
                }

                // keosu_gadget_delete
                if (0 === strpos($pathinfo, '/views/page/gadget/delete') && preg_match('#^/views/page/gadget/delete/(?P<pageId>[^/]++)/(?P<zoneName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_gadget_delete')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageGadgetsController::deleteAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/content/reader/manage')) {
            // keosu_ReaderManager_manage
            if ($pathinfo === '/content/reader/manage') {
                return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageReadersController::addAction',  '_route' => 'keosu_ReaderManager_manage',);
            }

            // keosu_ReaderManager_edit_delete
            if (0 === strpos($pathinfo, '/content/reader/manage/delete') && preg_match('#^/content/reader/manage/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_edit_delete')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ManageReadersController::deleteAction',));
            }

        }

        // keosu_ReaderManager_service_list
        if (0 === strpos($pathinfo, '/service/content/reader/list') && preg_match('#^/service/content/reader/list/(?P<format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_ReaderManager_service_list')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ReaderServiceController::viewAction',));
        }

        // keosu_core_exporter_export
        if (rtrim($pathinfo, '/') === '/publish/export') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'keosu_core_exporter_export');
            }

            return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ExporterController::exportAction',  '_route' => 'keosu_core_exporter_export',);
        }

        // keosu_changeapp
        if (0 === strpos($pathinfo, '/changeapp') && preg_match('#^/changeapp/(?P<appid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_changeapp')), array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\ChangeAppController::changeAppAction',));
        }

        // keosu_xml2json
        if ($pathinfo === '/service/xml2json') {
            return array (  '_controller' => 'Keosu\\CoreBundle\\Controller\\XmlToJsonController::convertAction',  '_route' => 'keosu_xml2json',);
        }

        if (0 === strpos($pathinfo, '/content')) {
            if (0 === strpos($pathinfo, '/content/article')) {
                // keosu_article_viewlist
                if (rtrim($pathinfo, '/') === '/content/article') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'keosu_article_viewlist');
                    }

                    return array (  '_controller' => 'Keosu\\DataModel\\ArticleModelBundle\\Controller\\ViewController::viewAction',  '_route' => 'keosu_article_viewlist',);
                }

                // keosu_article_delete
                if (0 === strpos($pathinfo, '/content/article/delete') && preg_match('#^/content/article/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_article_delete')), array (  '_controller' => 'Keosu\\DataModel\\ArticleModelBundle\\Controller\\EditController::deleteAction',));
                }

                // keosu_article_edit
                if (0 === strpos($pathinfo, '/content/article/edit') && preg_match('#^/content/article/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_article_edit')), array (  '_controller' => 'Keosu\\DataModel\\ArticleModelBundle\\Controller\\EditController::editAction',));
                }

                // keosu_article_add
                if ($pathinfo === '/content/article/add') {
                    return array (  '_controller' => 'Keosu\\DataModel\\ArticleModelBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_article_add',);
                }

            }

            if (0 === strpos($pathinfo, '/content/poi')) {
                // keosu_location_viewlist
                if (rtrim($pathinfo, '/') === '/content/poi') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'keosu_location_viewlist');
                    }

                    return array (  '_controller' => 'Keosu\\DataModel\\LocationModelBundle\\Controller\\ViewController::viewAction',  '_route' => 'keosu_location_viewlist',);
                }

                // keosu_poi_delete
                if (0 === strpos($pathinfo, '/content/poi/delete') && preg_match('#^/content/poi/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_poi_delete')), array (  '_controller' => 'Keosu\\DataModel\\LocationModelBundle\\Controller\\EditController::deleteAction',));
                }

                // keosu_poi_edit
                if (0 === strpos($pathinfo, '/content/poi/edit') && preg_match('#^/content/poi/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_poi_edit')), array (  '_controller' => 'Keosu\\DataModel\\LocationModelBundle\\Controller\\EditController::editAction',));
                }

                // keosu_poi_add
                if ($pathinfo === '/content/poi/add') {
                    return array (  '_controller' => 'Keosu\\DataModel\\LocationModelBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_poi_add',);
                }

            }

            if (0 === strpos($pathinfo, '/content/event')) {
                // keosu_event_viewlist
                if ($pathinfo === '/content/event') {
                    return array (  '_controller' => 'Keosu\\DataModel\\EventModelBundle\\Controller\\ViewController::viewAction',  '_route' => 'keosu_event_viewlist',);
                }

                // keosu_event_delete
                if (0 === strpos($pathinfo, '/content/event/delete') && preg_match('#^/content/event/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_event_delete')), array (  '_controller' => 'Keosu\\DataModel\\EventModelBundle\\Controller\\EditController::deleteAction',));
                }

                // keosu_event_edit
                if (0 === strpos($pathinfo, '/content/event/edit') && preg_match('#^/content/event/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'keosu_event_edit')), array (  '_controller' => 'Keosu\\DataModel\\EventModelBundle\\Controller\\EditController::editAction',));
                }

                // keosu_event_add
                if ($pathinfo === '/content/event/add') {
                    return array (  '_controller' => 'Keosu\\DataModel\\EventModelBundle\\Controller\\EditController::addAction',  '_route' => 'keosu_event_add',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'KeosuUserBundle:Security:login',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
