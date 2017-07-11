<?php
/**
 * SidebarSetupMenuDemoListener.php
 * avanzu-admin
 * Date: 23.02.14
 */

namespace Avanzu\AdminThemeBundle\EventListener;


use Avanzu\AdminThemeBundle\Event\SidebarMenuEvent;
use Avanzu\AdminThemeBundle\Model\MenuItemModel;
use Symfony\Component\HttpFoundation\Request;

class SidebarSetupMenuDemoListener
{

    public function onSetupMenu(SidebarMenuEvent $event)
    {
        $request = $event->getRequest();

        foreach ($this->getMenu($request) as $item) {
            $event->addItem($item);
        }

    }

    protected function getMenu(Request $request)
    {
        $earg      = array();
        $rootItems = array(
            $dash = new MenuItemModel('dashboard', 'Mon Compte', 'admin_dash', $earg, 'fa fa-dashboard'),
            $user = new MenuItemModel('user', 'Users', '', $earg, 'fa fa-user '),
            $room = new MenuItemModel('room', 'Chambres', '', $earg, 'fa fa-bed'),
            $appart = new MenuItemModel('apparts', 'Appartements', '', $earg, 'fa fa-home'),
            $residence = new MenuItemModel('residence', 'Résidences', '', $earg, 'fa fa-map'),
            $meuble = new MenuItemModel('meubles', 'Meubles', '', $earg, 'fa fa-tv'),
            $docs = new MenuItemModel('documents', 'Documents', '', $earg, 'fa fa-file'),
            $divers = new MenuItemModel('divers', 'Divers', '', $earg, 'fa fa-th'),
            

        );
        
        $user->addChild(new MenuItemModel('list_users', 'Liste Utilisateurs', 'user_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('new_user', 'New Utilisateur', 'user_new', $earg,  'fa fa-plus'))
             ->addChild(new MenuItemModel('valider_user', 'Valider Demande', 'validation_user', $earg,  'fa fa-check'));

        $room->addChild(new MenuItemModel('liste_chambre', 'Liste des Chambres', 'room_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouvelle_chambre', 'Nouvelle Chambre', 'room_new', $earg,  'fa fa-plus'));

        $appart->addChild(new MenuItemModel('liste_appartement', 'Liste des Appartements', 'appartement_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouvel_appartement', 'Nouvel Appartement', 'appartement_new', $earg,  'fa fa-plus'));

        $residence->addChild(new MenuItemModel('liste_residence', 'Liste des Résidences', 'residence_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouvelle_residence', 'Nouvelle Résidence', 'residence_new', $earg,  'fa fa-plus'));

        $meuble->addChild(new MenuItemModel('liste_meuble', 'Liste des Meubles', 'meuble_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouveau_meuble', 'Nouveau Meuble', 'meuble_new', $earg,  'fa fa-plus'))
            ->addChild(new MenuItemModel('liste_type_meuble', 'Types Meubles', 'typemeuble_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouveau_type_meuble', 'Nouveau Type Meuble', 'typemeuble_new', $earg,  'fa fa-plus'));

        $docs->addChild(new MenuItemModel('bail', 'Contrat Bail', 'admin_document', $earg))
            ->addChild(new MenuItemModel('facture', 'Facture', 'admin_document', $earg));

        $divers->addChild(new MenuItemModel('chat', 'Chat', 'admin_chat', $earg,  'fa fa-send-o'))
            ->addChild(new MenuItemModel('message_general', 'Message Broadcast', 'admin_mail', $earg,  'fa fa-envelope'));

        return $this->activateByRoute($request->get('_route'), $rootItems);

    }

    protected function activateByRoute($route, $items) {

        foreach($items as $item) { /** @var $item MenuItemModel */
            if($item->hasChildren()) {
                $this->activateByRoute($route, $item->getChildren());
            }
            else {
                if($item->getRoute() == $route) {
                    $item->setIsActive(true);
                }
            }
        }

        return $items;
    }


}