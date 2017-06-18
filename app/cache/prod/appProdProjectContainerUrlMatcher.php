<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // adminepage
        if ($pathinfo === '/adminSfalou') {
            return array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminAction',  '_route' => 'adminepage',);
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

                // admin_form_room
                if (rtrim($pathinfo, '/') === '/admin/add_room') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_room');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addRoomAction',  '_route' => 'admin_form_room',);
                }

                // admin_liste_room
                if (rtrim($pathinfo, '/') === '/admin/liste_room') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_room');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  '_route' => 'admin_liste_room',);
                }

                // admin_form_appart
                if (rtrim($pathinfo, '/') === '/admin/add_appart') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_appart');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addAppartAction',  '_route' => 'admin_form_appart',);
                }

                // admin_liste_appart
                if (rtrim($pathinfo, '/') === '/admin/liste_appart') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_appart');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  '_route' => 'admin_liste_appart',);
                }

                // admin_form_residence
                if (rtrim($pathinfo, '/') === '/admin/add_residence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_residence');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addResidenceAction',  '_route' => 'admin_form_residence',);
                }

                // admin_liste_residence
                if (rtrim($pathinfo, '/') === '/admin/liste_residence') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_residence');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  '_route' => 'admin_liste_residence',);
                }

                // admin_form_meuble
                if (rtrim($pathinfo, '/') === '/admin/add_meuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_form_meuble');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addMeubleAction',  '_route' => 'admin_form_meuble',);
                }

                // admin_liste_meuble
                if (rtrim($pathinfo, '/') === '/admin/liste_meuble') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_liste_meuble');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  '_route' => 'admin_liste_meuble',);
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
