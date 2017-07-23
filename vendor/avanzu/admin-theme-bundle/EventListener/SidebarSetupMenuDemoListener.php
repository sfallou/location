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
            $dash = new MenuItemModel('dashboard', 'Mon Compte', 'after_login', $earg, 'fa fa-dashboard'),
            $user = new MenuItemModel('user', 'Users', '', $earg, 'fa fa-user '),
            $room = new MenuItemModel('room', 'Chambres', '', $earg, 'fa fa-bed'),
            $appart = new MenuItemModel('apparts', 'Appartements', '', $earg, 'fa fa-home'),
            $residence = new MenuItemModel('residence', 'Résidences', '', $earg, 'fa fa-map'),
            $meuble = new MenuItemModel('meubles', 'Meubles', '', $earg, 'fa fa-tv'),
            $docs = new MenuItemModel('documents', 'Documents', '', $earg, 'fa fa-file'),
            $mail = new MenuItemModel('mail', 'Mail', '', $earg, 'fa fa-envelope'),
            $divers = new MenuItemModel('divers', 'Divers', '', $earg, 'fa fa-th'),   

        );
        
        
        $room->addChild(new MenuItemModel('liste_chambre', 'Liste des Chambres', 'room_index', $earg,  'fa fa-navicon'));
        $user->addChild(new MenuItemModel('list_users', 'Liste Utilisateurs', 'user_index', $earg,  'fa fa-navicon'));
        $appart->addChild(new MenuItemModel('liste_appartement', 'Liste des Appartements', 'appartement_index', $earg,  'fa fa-navicon'));

        $residence->addChild(new MenuItemModel('liste_residence', 'Liste des Résidences', 'residence_index', $earg,  'fa fa-navicon'));
        $meuble->addChild(new MenuItemModel('liste_meuble', 'Liste des Meubles', 'meuble_index', $earg,  'fa fa-navicon'));
        $meuble->addChild(new MenuItemModel('liste_type_meuble', 'Types Meubles', 'typemeuble_index', $earg,  'fa fa-navicon'));
        $docs->addChild(new MenuItemModel('liste_doc', 'Liste Documents', 'document_index', $earg, 'fa fa-navicon'));
        $docs->addChild(new MenuItemModel('liste_type_doc', 'Liste Type Document', 'typedocument_index', $earg, 'fa fa-navicon'));

      
        $room->addChild(new MenuItemModel('nouvelle_chambre', 'Nouvelle Chambre', 'room_new', $earg,  'fa fa-plus'));
        $user->addChild(new MenuItemModel('new_user', 'New Utilisateur', 'user_new', $earg,  'fa fa-plus'));
        $user->addChild(new MenuItemModel('valider_user', 'Valider Demande', 'validation_user', $earg,  'fa fa-check'));
        $appart->addChild(new MenuItemModel('nouvel_appartement', 'Nouvel Appartement', 'appartement_new', $earg,  'fa fa-plus'));
        $residence->addChild(new MenuItemModel('nouvelle_residence', 'Nouvelle Résidence', 'residence_new', $earg,  'fa fa-plus'));
        $meuble->addChild(new MenuItemModel('nouveau_meuble', 'Nouveau Meuble', 'meuble_new', $earg,  'fa fa-plus'));
        $meuble->addChild(new MenuItemModel('nouveau_type_meuble', 'Nouveau Type Meuble', 'typemeuble_new', $earg,  'fa fa-plus'));
        $docs->addChild(new MenuItemModel('nouveau_doc', 'Nouveau Document', 'document_new', $earg,  'fa fa-plus'));
        $docs->addChild(new MenuItemModel('nouveau_type_doc', 'Nouveau Type Document', 'typedocument_new', $earg,  'fa fa-plus'));

         $mail->addChild(new MenuItemModel('new_mail', 'New Mail', 'send_mail', $earg,  'fa fa-plus'))
            ->addChild(new MenuItemModel('liste_mail', 'Mails', 'typecontact_index', $earg,  'fa fa-navicon'));
        $divers->addChild(new MenuItemModel('liste_type_fix', 'Fix Types', 'typefix_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('new_type_fix', 'New Fix Types', 'typefix_new', $earg,  'fa fa-plus'))
            ->addChild(new MenuItemModel('liste_type_charge', 'Charge Types', 'typecharge_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('new_type_charge', 'New Charge Types', 'typecharge_new', $earg,  'fa fa-plus'))
             ->addChild(new MenuItemModel('liste_contact', 'Contacts', 'contact_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('new_contact', 'New Contact ', 'contact_new', $earg,  'fa fa-plus'))
             ->addChild(new MenuItemModel('liste_type_contact', 'Contact Types', 'typecontact_index', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('new_type_contact', 'New Contact Types', 'typecontact_new', $earg,  'fa fa-plus'));

        


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