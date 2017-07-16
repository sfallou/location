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

        if (0 === strpos($pathinfo, '/appartement')) {
            // appartement_index
            if (rtrim($pathinfo, '/') === '/appartement') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_appartement_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'appartement_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AppartementController::indexAction',  '_route' => 'appartement_index',);
            }
            not_appartement_index:

            // appartement_new
            if ($pathinfo === '/appartement/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_appartement_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AppartementController::newAction',  '_route' => 'appartement_new',);
            }
            not_appartement_new:

            // appartement_show
            if (preg_match('#^/appartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_appartement_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_show')), array (  '_controller' => 'AppBundle\\Controller\\AppartementController::showAction',));
            }
            not_appartement_show:

            // appartement_edit
            if (preg_match('#^/appartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_appartement_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_edit')), array (  '_controller' => 'AppBundle\\Controller\\AppartementController::editAction',));
            }
            not_appartement_edit:

            // appartement_delete
            if (preg_match('#^/appartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_appartement_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'appartement_delete')), array (  '_controller' => 'AppBundle\\Controller\\AppartementController::deleteAction',));
            }
            not_appartement_delete:

        }

        // validation_user
        if ($pathinfo === '/validation') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_validation_user;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\AssociationController::validationAction',  '_route' => 'validation_user',);
        }
        not_validation_user:

        // user_validated
        if (preg_match('#^/(?P<id>[^/]++)/validated$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_user_validated;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_validated')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::validatedAction',));
        }
        not_user_validated:

        // add_furniture_appart
        if (preg_match('#^/(?P<id>[^/]++)/add_furniture_appart$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_furniture_appart;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_furniture_appart')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addFurnitureAppartAction',));
        }
        not_add_furniture_appart:

        // add_fix_appart
        if (preg_match('#^/(?P<id>[^/]++)/add_fix_appart$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_fix_appart;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_fix_appart')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addFixAppartAction',));
        }
        not_add_fix_appart:

        // add_charge_appart
        if (preg_match('#^/(?P<id>[^/]++)/add_charge_appart$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_charge_appart;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_charge_appart')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addChargeAppartAction',));
        }
        not_add_charge_appart:

        // add_doc_appart
        if (preg_match('#^/(?P<id>[^/]++)/add_doc_appart$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_doc_appart;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_doc_appart')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addDocAppartAction',));
        }
        not_add_doc_appart:

        // fix_appart_done
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idAppart>[^/]++)/fix_appart_done$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fix_appart_done;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fix_appart_done')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::fixAppartDoneAction',));
        }
        not_fix_appart_done:

        // fix_appart_undone
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idAppart>[^/]++)/fix_appart_undone$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fix_appart_undone;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fix_appart_undone')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::fixAppartUndoneAction',));
        }
        not_fix_appart_undone:

        // charge_appart_paid
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idAppart>[^/]++)/charge_appart_paid$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_charge_appart_paid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charge_appart_paid')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::chargeAppartPaidAction',));
        }
        not_charge_appart_paid:

        // charge_appart_unpaid
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idAppart>[^/]++)/charge_appart_unpaid$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_charge_appart_unpaid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charge_appart_unpaid')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::chargeAppartUnpaidAction',));
        }
        not_charge_appart_unpaid:

        // add_furniture_room
        if (preg_match('#^/(?P<id>[^/]++)/add_furniture_room$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_furniture_room;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_furniture_room')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addFurnitureRoomAction',));
        }
        not_add_furniture_room:

        // add_fix_room
        if (preg_match('#^/(?P<id>[^/]++)/add_fix_room$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_fix_room;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_fix_room')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addFixRoomAction',));
        }
        not_add_fix_room:

        // add_charge_room
        if (preg_match('#^/(?P<id>[^/]++)/add_charge_room$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_add_charge_room;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_charge_room')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::addChargeRoomAction',));
        }
        not_add_charge_room:

        // fix_room_done
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idRoom>[^/]++)/fix_room_done$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fix_room_done;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fix_room_done')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::fixRoomDoneAction',));
        }
        not_fix_room_done:

        // fix_room_undone
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idRoom>[^/]++)/fix_room_undone$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fix_room_undone;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fix_room_undone')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::fixRoomUndoneAction',));
        }
        not_fix_room_undone:

        // charge_room_paid
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idRoom>[^/]++)/charge_room_paid$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_charge_room_paid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charge_room_paid')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::chargeRoomPaidAction',));
        }
        not_charge_room_paid:

        // charge_room_unpaid
        if (preg_match('#^/(?P<id>[^/]++)/(?P<idRoom>[^/]++)/charge_room_unpaid$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_charge_room_unpaid;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'charge_room_unpaid')), array (  '_controller' => 'AppBundle\\Controller\\AssociationController::chargeRoomtUnpaidAction',));
        }
        not_charge_room_unpaid:

        if (0 === strpos($pathinfo, '/charge')) {
            if (0 === strpos($pathinfo, '/chargeappartement')) {
                // chargeappartement_index
                if (rtrim($pathinfo, '/') === '/chargeappartement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chargeappartement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chargeappartement_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ChargeAppartementController::indexAction',  '_route' => 'chargeappartement_index',);
                }
                not_chargeappartement_index:

                // chargeappartement_new
                if ($pathinfo === '/chargeappartement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_chargeappartement_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ChargeAppartementController::newAction',  '_route' => 'chargeappartement_new',);
                }
                not_chargeappartement_new:

                // chargeappartement_show
                if (preg_match('#^/chargeappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chargeappartement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chargeappartement_show')), array (  '_controller' => 'AppBundle\\Controller\\ChargeAppartementController::showAction',));
                }
                not_chargeappartement_show:

                // chargeappartement_edit
                if (preg_match('#^/chargeappartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_chargeappartement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chargeappartement_edit')), array (  '_controller' => 'AppBundle\\Controller\\ChargeAppartementController::editAction',));
                }
                not_chargeappartement_edit:

                // chargeappartement_delete
                if (preg_match('#^/chargeappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_chargeappartement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chargeappartement_delete')), array (  '_controller' => 'AppBundle\\Controller\\ChargeAppartementController::deleteAction',));
                }
                not_chargeappartement_delete:

            }

            if (0 === strpos($pathinfo, '/chargeroom')) {
                // chargeroom_index
                if (rtrim($pathinfo, '/') === '/chargeroom') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chargeroom_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'chargeroom_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ChargeRoomController::indexAction',  '_route' => 'chargeroom_index',);
                }
                not_chargeroom_index:

                // chargeroom_new
                if ($pathinfo === '/chargeroom/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_chargeroom_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ChargeRoomController::newAction',  '_route' => 'chargeroom_new',);
                }
                not_chargeroom_new:

                // chargeroom_show
                if (preg_match('#^/chargeroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_chargeroom_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chargeroom_show')), array (  '_controller' => 'AppBundle\\Controller\\ChargeRoomController::showAction',));
                }
                not_chargeroom_show:

                // chargeroom_edit
                if (preg_match('#^/chargeroom/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_chargeroom_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chargeroom_edit')), array (  '_controller' => 'AppBundle\\Controller\\ChargeRoomController::editAction',));
                }
                not_chargeroom_edit:

                // chargeroom_delete
                if (preg_match('#^/chargeroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_chargeroom_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'chargeroom_delete')), array (  '_controller' => 'AppBundle\\Controller\\ChargeRoomController::deleteAction',));
                }
                not_chargeroom_delete:

            }

        }

        // start
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'start');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::startAction',  '_route' => 'start',);
        }

        if (0 === strpos($pathinfo, '/document')) {
            if (0 === strpos($pathinfo, '/documentappartement')) {
                // documentappartement_index
                if (rtrim($pathinfo, '/') === '/documentappartement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_documentappartement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'documentappartement_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DocumentAppartementController::indexAction',  '_route' => 'documentappartement_index',);
                }
                not_documentappartement_index:

                // documentappartement_new
                if ($pathinfo === '/documentappartement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_documentappartement_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\DocumentAppartementController::newAction',  '_route' => 'documentappartement_new',);
                }
                not_documentappartement_new:

                // documentappartement_show
                if (preg_match('#^/documentappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_documentappartement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentappartement_show')), array (  '_controller' => 'AppBundle\\Controller\\DocumentAppartementController::showAction',));
                }
                not_documentappartement_show:

                // documentappartement_edit
                if (preg_match('#^/documentappartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_documentappartement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentappartement_edit')), array (  '_controller' => 'AppBundle\\Controller\\DocumentAppartementController::editAction',));
                }
                not_documentappartement_edit:

                // documentappartement_delete
                if (preg_match('#^/documentappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_documentappartement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'documentappartement_delete')), array (  '_controller' => 'AppBundle\\Controller\\DocumentAppartementController::deleteAction',));
                }
                not_documentappartement_delete:

            }

            // document_index
            if (rtrim($pathinfo, '/') === '/document') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_document_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'document_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::indexAction',  '_route' => 'document_index',);
            }
            not_document_index:

            // document_new
            if ($pathinfo === '/document/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_document_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DocumentController::newAction',  '_route' => 'document_new',);
            }
            not_document_new:

            // document_show
            if (preg_match('#^/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_document_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_show')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::showAction',));
            }
            not_document_show:

            // document_edit
            if (preg_match('#^/document/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_document_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_edit')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::editAction',));
            }
            not_document_edit:

            // document_delete
            if (preg_match('#^/document/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_document_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'document_delete')), array (  '_controller' => 'AppBundle\\Controller\\DocumentController::deleteAction',));
            }
            not_document_delete:

        }

        if (0 === strpos($pathinfo, '/fix')) {
            if (0 === strpos($pathinfo, '/fixappartement')) {
                // fixappartement_index
                if (rtrim($pathinfo, '/') === '/fixappartement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fixappartement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fixappartement_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FixAppartementController::indexAction',  '_route' => 'fixappartement_index',);
                }
                not_fixappartement_index:

                // fixappartement_new
                if ($pathinfo === '/fixappartement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fixappartement_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FixAppartementController::newAction',  '_route' => 'fixappartement_new',);
                }
                not_fixappartement_new:

                // fixappartement_show
                if (preg_match('#^/fixappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fixappartement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixappartement_show')), array (  '_controller' => 'AppBundle\\Controller\\FixAppartementController::showAction',));
                }
                not_fixappartement_show:

                // fixappartement_edit
                if (preg_match('#^/fixappartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fixappartement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixappartement_edit')), array (  '_controller' => 'AppBundle\\Controller\\FixAppartementController::editAction',));
                }
                not_fixappartement_edit:

                // fixappartement_delete
                if (preg_match('#^/fixappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_fixappartement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixappartement_delete')), array (  '_controller' => 'AppBundle\\Controller\\FixAppartementController::deleteAction',));
                }
                not_fixappartement_delete:

            }

            if (0 === strpos($pathinfo, '/fixroom')) {
                // fixroom_index
                if (rtrim($pathinfo, '/') === '/fixroom') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fixroom_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fixroom_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FixRoomController::indexAction',  '_route' => 'fixroom_index',);
                }
                not_fixroom_index:

                // fixroom_new
                if ($pathinfo === '/fixroom/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fixroom_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\FixRoomController::newAction',  '_route' => 'fixroom_new',);
                }
                not_fixroom_new:

                // fixroom_show
                if (preg_match('#^/fixroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fixroom_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixroom_show')), array (  '_controller' => 'AppBundle\\Controller\\FixRoomController::showAction',));
                }
                not_fixroom_show:

                // fixroom_edit
                if (preg_match('#^/fixroom/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fixroom_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixroom_edit')), array (  '_controller' => 'AppBundle\\Controller\\FixRoomController::editAction',));
                }
                not_fixroom_edit:

                // fixroom_delete
                if (preg_match('#^/fixroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_fixroom_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fixroom_delete')), array (  '_controller' => 'AppBundle\\Controller\\FixRoomController::deleteAction',));
                }
                not_fixroom_delete:

            }

        }

        if (0 === strpos($pathinfo, '/meuble')) {
            if (0 === strpos($pathinfo, '/meubleappartement')) {
                // meubleappartement_index
                if (rtrim($pathinfo, '/') === '/meubleappartement') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_meubleappartement_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'meubleappartement_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MeubleAppartementController::indexAction',  '_route' => 'meubleappartement_index',);
                }
                not_meubleappartement_index:

                // meubleappartement_new
                if ($pathinfo === '/meubleappartement/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_meubleappartement_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MeubleAppartementController::newAction',  '_route' => 'meubleappartement_new',);
                }
                not_meubleappartement_new:

                // meubleappartement_show
                if (preg_match('#^/meubleappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_meubleappartement_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'meubleappartement_show')), array (  '_controller' => 'AppBundle\\Controller\\MeubleAppartementController::showAction',));
                }
                not_meubleappartement_show:

                // meubleappartement_edit
                if (preg_match('#^/meubleappartement/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_meubleappartement_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'meubleappartement_edit')), array (  '_controller' => 'AppBundle\\Controller\\MeubleAppartementController::editAction',));
                }
                not_meubleappartement_edit:

                // meubleappartement_delete
                if (preg_match('#^/meubleappartement/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_meubleappartement_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'meubleappartement_delete')), array (  '_controller' => 'AppBundle\\Controller\\MeubleAppartementController::deleteAction',));
                }
                not_meubleappartement_delete:

            }

            // meuble_index
            if (rtrim($pathinfo, '/') === '/meuble') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_meuble_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'meuble_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MeubleController::indexAction',  '_route' => 'meuble_index',);
            }
            not_meuble_index:

            // meuble_new
            if ($pathinfo === '/meuble/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_meuble_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MeubleController::newAction',  '_route' => 'meuble_new',);
            }
            not_meuble_new:

            // meuble_show
            if (preg_match('#^/meuble/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_meuble_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meuble_show')), array (  '_controller' => 'AppBundle\\Controller\\MeubleController::showAction',));
            }
            not_meuble_show:

            // meuble_edit
            if (preg_match('#^/meuble/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_meuble_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meuble_edit')), array (  '_controller' => 'AppBundle\\Controller\\MeubleController::editAction',));
            }
            not_meuble_edit:

            // meuble_delete
            if (preg_match('#^/meuble/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_meuble_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'meuble_delete')), array (  '_controller' => 'AppBundle\\Controller\\MeubleController::deleteAction',));
            }
            not_meuble_delete:

            if (0 === strpos($pathinfo, '/meubleroom')) {
                // meubleroom_index
                if (rtrim($pathinfo, '/') === '/meubleroom') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_meubleroom_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'meubleroom_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MeubleRoomController::indexAction',  '_route' => 'meubleroom_index',);
                }
                not_meubleroom_index:

                // meubleroom_new
                if ($pathinfo === '/meubleroom/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_meubleroom_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\MeubleRoomController::newAction',  '_route' => 'meubleroom_new',);
                }
                not_meubleroom_new:

                // meubleroom_show
                if (preg_match('#^/meubleroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_meubleroom_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'meubleroom_show')), array (  '_controller' => 'AppBundle\\Controller\\MeubleRoomController::showAction',));
                }
                not_meubleroom_show:

                // meubleroom_edit
                if (preg_match('#^/meubleroom/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_meubleroom_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'meubleroom_edit')), array (  '_controller' => 'AppBundle\\Controller\\MeubleRoomController::editAction',));
                }
                not_meubleroom_edit:

                // meubleroom_delete
                if (preg_match('#^/meubleroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_meubleroom_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'meubleroom_delete')), array (  '_controller' => 'AppBundle\\Controller\\MeubleRoomController::deleteAction',));
                }
                not_meubleroom_delete:

            }

        }

        if (0 === strpos($pathinfo, '/r')) {
            if (0 === strpos($pathinfo, '/residence')) {
                // residence_index
                if (rtrim($pathinfo, '/') === '/residence') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_residence_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'residence_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ResidenceController::indexAction',  '_route' => 'residence_index',);
                }
                not_residence_index:

                // residence_new
                if ($pathinfo === '/residence/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_residence_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ResidenceController::newAction',  '_route' => 'residence_new',);
                }
                not_residence_new:

                // residence_show
                if (preg_match('#^/residence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_residence_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'residence_show')), array (  '_controller' => 'AppBundle\\Controller\\ResidenceController::showAction',));
                }
                not_residence_show:

                // residence_edit
                if (preg_match('#^/residence/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_residence_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'residence_edit')), array (  '_controller' => 'AppBundle\\Controller\\ResidenceController::editAction',));
                }
                not_residence_edit:

                // residence_delete
                if (preg_match('#^/residence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_residence_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'residence_delete')), array (  '_controller' => 'AppBundle\\Controller\\ResidenceController::deleteAction',));
                }
                not_residence_delete:

            }

            if (0 === strpos($pathinfo, '/room')) {
                // room_index
                if (rtrim($pathinfo, '/') === '/room') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_room_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'room_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RoomController::indexAction',  '_route' => 'room_index',);
                }
                not_room_index:

                // room_new
                if ($pathinfo === '/room/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_room_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\RoomController::newAction',  '_route' => 'room_new',);
                }
                not_room_new:

                // room_show
                if (preg_match('#^/room/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_room_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_show')), array (  '_controller' => 'AppBundle\\Controller\\RoomController::showAction',));
                }
                not_room_show:

                // room_edit
                if (preg_match('#^/room/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_room_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_edit')), array (  '_controller' => 'AppBundle\\Controller\\RoomController::editAction',));
                }
                not_room_edit:

                // room_delete
                if (preg_match('#^/room/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_room_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'room_delete')), array (  '_controller' => 'AppBundle\\Controller\\RoomController::deleteAction',));
                }
                not_room_delete:

            }

        }

        if (0 === strpos($pathinfo, '/type')) {
            if (0 === strpos($pathinfo, '/typecharge')) {
                // typecharge_index
                if (rtrim($pathinfo, '/') === '/typecharge') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typecharge_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typecharge_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeChargeController::indexAction',  '_route' => 'typecharge_index',);
                }
                not_typecharge_index:

                // typecharge_new
                if ($pathinfo === '/typecharge/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typecharge_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeChargeController::newAction',  '_route' => 'typecharge_new',);
                }
                not_typecharge_new:

                // typecharge_show
                if (preg_match('#^/typecharge/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typecharge_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecharge_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeChargeController::showAction',));
                }
                not_typecharge_show:

                // typecharge_edit
                if (preg_match('#^/typecharge/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typecharge_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecharge_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeChargeController::editAction',));
                }
                not_typecharge_edit:

                // typecharge_delete
                if (preg_match('#^/typecharge/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typecharge_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typecharge_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeChargeController::deleteAction',));
                }
                not_typecharge_delete:

            }

            if (0 === strpos($pathinfo, '/typedocument')) {
                // typedocument_index
                if (rtrim($pathinfo, '/') === '/typedocument') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typedocument_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typedocument_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeDocumentController::indexAction',  '_route' => 'typedocument_index',);
                }
                not_typedocument_index:

                // typedocument_new
                if ($pathinfo === '/typedocument/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typedocument_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeDocumentController::newAction',  '_route' => 'typedocument_new',);
                }
                not_typedocument_new:

                // typedocument_show
                if (preg_match('#^/typedocument/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typedocument_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typedocument_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeDocumentController::showAction',));
                }
                not_typedocument_show:

                // typedocument_edit
                if (preg_match('#^/typedocument/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typedocument_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typedocument_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeDocumentController::editAction',));
                }
                not_typedocument_edit:

                // typedocument_delete
                if (preg_match('#^/typedocument/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typedocument_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typedocument_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeDocumentController::deleteAction',));
                }
                not_typedocument_delete:

            }

            if (0 === strpos($pathinfo, '/typefix')) {
                // typefix_index
                if (rtrim($pathinfo, '/') === '/typefix') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typefix_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typefix_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeFixController::indexAction',  '_route' => 'typefix_index',);
                }
                not_typefix_index:

                // typefix_new
                if ($pathinfo === '/typefix/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typefix_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeFixController::newAction',  '_route' => 'typefix_new',);
                }
                not_typefix_new:

                // typefix_show
                if (preg_match('#^/typefix/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typefix_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typefix_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeFixController::showAction',));
                }
                not_typefix_show:

                // typefix_edit
                if (preg_match('#^/typefix/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typefix_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typefix_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeFixController::editAction',));
                }
                not_typefix_edit:

                // typefix_delete
                if (preg_match('#^/typefix/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typefix_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typefix_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeFixController::deleteAction',));
                }
                not_typefix_delete:

            }

            if (0 === strpos($pathinfo, '/typemeuble')) {
                // typemeuble_index
                if (rtrim($pathinfo, '/') === '/typemeuble') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typemeuble_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'typemeuble_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeMeubleController::indexAction',  '_route' => 'typemeuble_index',);
                }
                not_typemeuble_index:

                // typemeuble_new
                if ($pathinfo === '/typemeuble/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typemeuble_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\TypeMeubleController::newAction',  '_route' => 'typemeuble_new',);
                }
                not_typemeuble_new:

                // typemeuble_show
                if (preg_match('#^/typemeuble/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_typemeuble_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typemeuble_show')), array (  '_controller' => 'AppBundle\\Controller\\TypeMeubleController::showAction',));
                }
                not_typemeuble_show:

                // typemeuble_edit
                if (preg_match('#^/typemeuble/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_typemeuble_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typemeuble_edit')), array (  '_controller' => 'AppBundle\\Controller\\TypeMeubleController::editAction',));
                }
                not_typemeuble_edit:

                // typemeuble_delete
                if (preg_match('#^/typemeuble/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_typemeuble_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'typemeuble_delete')), array (  '_controller' => 'AppBundle\\Controller\\TypeMeubleController::deleteAction',));
                }
                not_typemeuble_delete:

            }

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_index
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_index');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::indexAction',  '_route' => 'user_index',);
            }
            not_user_index:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'AppBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            if (0 === strpos($pathinfo, '/userroom')) {
                // userroom_index
                if (rtrim($pathinfo, '/') === '/userroom') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_userroom_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'userroom_index');
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserRoomController::indexAction',  '_route' => 'userroom_index',);
                }
                not_userroom_index:

                // userroom_new
                if ($pathinfo === '/userroom/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_userroom_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\UserRoomController::newAction',  '_route' => 'userroom_new',);
                }
                not_userroom_new:

                // userroom_show
                if (preg_match('#^/userroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_userroom_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userroom_show')), array (  '_controller' => 'AppBundle\\Controller\\UserRoomController::showAction',));
                }
                not_userroom_show:

                // userroom_edit
                if (preg_match('#^/userroom/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_userroom_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userroom_edit')), array (  '_controller' => 'AppBundle\\Controller\\UserRoomController::editAction',));
                }
                not_userroom_edit:

                // userroom_delete
                if (preg_match('#^/userroom/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_userroom_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'userroom_delete')), array (  '_controller' => 'AppBundle\\Controller\\UserRoomController::deleteAction',));
                }
                not_userroom_delete:

            }

        }

        // login
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'login');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'login',);
        }

        // admin
        if (rtrim($pathinfo, '/') === '/auth') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin',);
        }

        // admin_dash
        if (rtrim($pathinfo, '/') === '/dashboard') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_dash');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'admin_dash',);
        }

        // admin_form_locataire
        if (rtrim($pathinfo, '/') === '/add_locataire') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_form_locataire');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addLocataireAction',  '_route' => 'admin_form_locataire',);
        }

        // admin_liste_locataire
        if (rtrim($pathinfo, '/') === '/liste_locataire') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_liste_locataire');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  '_route' => 'admin_liste_locataire',);
        }

        // admin_valider_demande
        if (rtrim($pathinfo, '/') === '/valider') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin_valider_demande');
            }

            return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_valider_demande',);
        }

        if (0 === strpos($pathinfo, '/d')) {
            // admin_document
            if (rtrim($pathinfo, '/') === '/documents') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_document');
                }

                return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_document',);
            }

            if (0 === strpos($pathinfo, '/divers')) {
                // admin_chat
                if (rtrim($pathinfo, '/') === '/divers/chat') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_chat');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::chatAction',  '_route' => 'admin_chat',);
                }

                // admin_mail
                if (rtrim($pathinfo, '/') === '/divers/mail') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_mail');
                    }

                    return array (  '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::mailAction',  '_route' => 'admin_mail',);
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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
