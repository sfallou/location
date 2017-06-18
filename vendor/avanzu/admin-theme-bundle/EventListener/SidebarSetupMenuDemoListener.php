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


    /*protected function getMenu(Request $request)
    {
        $earg      = array();
        $rootItems = array(
            $dash = new MenuItemModel('dashboard', 'Dashboard', 'avanzu_admin_dash_demo', $earg, 'fa fa-dashboard'),
            $add_user = new MenuItemModel('user', 'Add User', 'avanzu_admin_form_demo', $earg, 'fa fa-edit'),
            $add_appartment = new MenuItemModel('appart', 'Add Appart', 'avanzu_admin_form_demo', $earg, 'fa fa-edit'),
            $show_appart = new MenuItemModel('widgets', 'Show Apparts', 'avanzu_admin_demo', $earg, 'fa fa-th', 'new'),
            $locataire = new MenuItemModel('locataire', 'Locataires', '', $earg, 'fa fa-th'),
            $room = new MenuItemModel('room', 'Chambre', '', $earg, 'fa fa-th')
            $appart = new MenuItemModel('apparts', 'Appartements', '', $earg, 'fa fa-th'),
            $residenc = new MenuItemModel('residence', 'Résidences', '', $earg, 'fa fa-th'),
            $docs = new MenuItemModel('documents', 'Documents', '', $earg, 'fa fa-th')

        );
        $locataire->addChild(new MenuItemModel('liste_locataire', 'Liste des Locataires', 'avanzu_admin_ui_gen_demo', $earg))
            ->addChild(new MenuItemModel('nouveau_locataire', 'Nouveau Locataire', 'avanzu_admin_ui_gen_demo', $earg));

        $docs->addChild(new MenuItemModel('bail', 'Contrat Bail', 'avanzu_admin_ui_gen_demo', $earg))
            ->addChild(new MenuItemModel('facture', 'Facture', 'avanzu_admin_ui_gen_demo', $earg));

        return $this->activateByRoute($request->get('_route'), $rootItems);

    }
    */

    protected function getMenu(Request $request)
    {
        $earg      = array();
        $rootItems = array(
            $dash = new MenuItemModel('dashboard', 'Dashboard', 'admin_dash', $earg, 'fa fa-dashboard'),
            $locataire = new MenuItemModel('locataire', 'Locataires', '', $earg, 'fa fa-user '),
            $room = new MenuItemModel('room', 'Chambres', '', $earg, 'fa fa-bed'),
            $appart = new MenuItemModel('apparts', 'Appartements', '', $earg, 'fa fa-home'),
            $residence = new MenuItemModel('residence', 'Résidences', '', $earg, 'fa fa-map'),
            $meuble = new MenuItemModel('meubles', 'Meubles', '', $earg, 'fa fa-tv'),
            $docs = new MenuItemModel('documents', 'Documents', '', $earg, 'fa fa-file'),
            $divers = new MenuItemModel('divers', 'Divers', '', $earg, 'fa fa-th'),
            

        );
        
        $locataire->addChild(new MenuItemModel('liste_locataire', 'Liste des Locataires', 'admin_liste_locataire', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouveau_locataire', 'Nouveau Locataire', 'admin_form_locataire', $earg,  'fa fa-plus'));

        $room->addChild(new MenuItemModel('liste_chambre', 'Liste des Chambres', 'admin_liste_room', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouvelle_chambre', 'Nouvelle Chambre', 'admin_form_room', $earg,  'fa fa-plus'));

        $appart->addChild(new MenuItemModel('liste_appartement', 'Liste des Appartements', 'admin_liste_appart', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouvel_appartement', 'Nouvel Appartement', 'admin_form_appart', $earg,  'fa fa-plus'));

        $residence->addChild(new MenuItemModel('liste_residence', 'Liste des Résidences', 'admin_liste_residence', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouveau_locataire', 'Nouveau Locataire', 'admin_form_residence', $earg,  'fa fa-plus'));

        $meuble->addChild(new MenuItemModel('liste_meuble', 'Liste des Meubles', 'admin_liste_meuble', $earg,  'fa fa-navicon'))
            ->addChild(new MenuItemModel('nouveau_meuble', 'Nouveau Meuble', 'admin_form_meuble', $earg,  'fa fa-plus'));

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