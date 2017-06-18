<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'adminepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\AdminController::adminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/adminSfalou',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/default',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/auth/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_dash' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::dashboardAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/dashboard/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_form_locataire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addLocataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_locataire/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_liste_locataire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/liste_locataire/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_form_room' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addRoomAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_room/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_liste_room' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/liste_room/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_form_appart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addAppartAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_appart/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_liste_appart' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/liste_appart/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_form_residence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addResidenceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_residence/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_liste_residence' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/liste_residence/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_form_meuble' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::addMeubleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/add_meuble/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_liste_meuble' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::listeLocataireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/liste_meuble/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_document' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/documents/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_chat' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::chatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/divers/chat/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_mail' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Avanzu\\AdminThemeBundle\\Controller\\DefaultController::mailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/divers/mail/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
