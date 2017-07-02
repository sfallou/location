<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if ($pathinfo === '/default') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // admin
            if (rtrim($pathinfo, '/') === '/auth') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin_dash
                if (rtrim($pathinfo, '/') === '/admin/dashboard') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_dash');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'admin_dash',);
                }

                // admin_form_locataire
                if (rtrim($pathinfo, '/') === '/admin/add_locataire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_locataire');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addLocataireAction',  '_route' => 'admin_form_locataire',);
                }

                // admin_liste_locataire
                if (rtrim($pathinfo, '/') === '/admin/liste_locataire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_locataire');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  '_route' => 'admin_liste_locataire',);
                }

                // admin_valider_demande
                if (rtrim($pathinfo, '/') === '/admin/valider') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_valider_demande');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_valider_demande',);
                }

                // admin_form_room
                if (rtrim($pathinfo, '/') === '/admin/add_room') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_room');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::newRoomAction',  '_route' => 'admin_form_room',);
                }

                // admin_liste_room
                if (rtrim($pathinfo, '/') === '/admin/liste_room') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_room');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listeRoomAction',  '_route' => 'admin_liste_room',);
                }

                // admin_show_room
                if (0 === strpos($pathinfo, '/admin/show_room') && preg_match('#^/admin/show_room/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_room')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showRoomAction',));
                }

                // admin_form_appart
                if (rtrim($pathinfo, '/') === '/admin/add_appart') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_appart');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::newAppartAction',  '_route' => 'admin_form_appart',);
                }

                // admin_liste_appart
                if (rtrim($pathinfo, '/') === '/admin/liste_appart') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_appart');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listeAppartAction',  '_route' => 'admin_liste_appart',);
                }

                // admin_show_appart
                if (0 === strpos($pathinfo, '/admin/show_appart') && preg_match('#^/admin/show_appart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_appart')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showAppartAction',));
                }

                // admin_form_residence
                if (rtrim($pathinfo, '/') === '/admin/add_residence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_residence');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::newResidenceAction',  '_route' => 'admin_form_residence',);
                }

                // admin_liste_residence
                if (rtrim($pathinfo, '/') === '/admin/liste_residence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_residence');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listeResidenceAction',  '_route' => 'admin_liste_residence',);
                }

                // admin_show_residence
                if (0 === strpos($pathinfo, '/admin/show_residence') && preg_match('#^/admin/show_residence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_show_residence')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showResidenceAction',));
                }

                // admin_form_type_meuble
                if (rtrim($pathinfo, '/') === '/admin/add_type_meuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_type_meuble');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::newTypeMeubleAction',  '_route' => 'admin_form_type_meuble',);
                }

                // admin_liste_type_meuble
                if (rtrim($pathinfo, '/') === '/admin/liste_type_meuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_type_meuble');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listeTypeMeubleAction',  '_route' => 'admin_liste_type_meuble',);
                }

                // admin_form_meuble
                if (rtrim($pathinfo, '/') === '/admin/add_meuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_meuble');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::newMeubleAction',  '_route' => 'admin_form_meuble',);
                }

                // admin_liste_meuble
                if (rtrim($pathinfo, '/') === '/admin/liste_meuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_meuble');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::listeMeubleAction',  '_route' => 'admin_liste_meuble',);
                }

                // admin_new_meuble_appart
                if (0 === strpos($pathinfo, '/admin/add_meuble_appart') && preg_match('#^/admin/add_meuble_appart/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_new_meuble_appart')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::newMeubleAppartAction',));
                }

                if (0 === strpos($pathinfo, '/admin/d')) {
                    // admin_document
                    if (rtrim($pathinfo, '/') === '/admin/documents') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_document');
                        }

                        return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_document',);
                    }

                    if (0 === strpos($pathinfo, '/admin/divers')) {
                        // admin_chat
                        if (rtrim($pathinfo, '/') === '/admin/divers/chat') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_chat');
                            }

                            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::chatAction',  '_route' => 'admin_chat',);
                        }

                        // admin_mail
                        if (rtrim($pathinfo, '/') === '/admin/divers/mail') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_mail');
                            }

                            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::mailAction',  '_route' => 'admin_mail',);
                        }

                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
