<?php

namespace Avanzu\AdminThemeBundle\Controller;

use Avanzu\AdminThemeBundle\Form\FormDemoModelType;
use Avanzu\AdminThemeBundle\Model\FormDemoModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DefaultController
 *
 * @package Avanzu\AdminThemeBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function dashboardAction() {
        return    $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function uiGeneralAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function listeLocataireAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:liste.html.twig');
    }

    public function uiIconsAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
    }

    public function addAppartAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AvanzuAdminThemeBundle:Default:add_appart.html.twig', array(
                'form' => $form->createView()
            ));
    }

    public function addRoomAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AvanzuAdminThemeBundle:Default:add_room.html.twig', array(
                'form' => $form->createView()
            ));
    }

    public function addResidenceAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AvanzuAdminThemeBundle:Default:add_residence.html.twig', array(
                'form' => $form->createView()
            ));
    }

    public function addLocataireAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AvanzuAdminThemeBundle:Default:add_locataire.html.twig', array(
                'form' => $form->createView()
            ));
    }

    public function addMeubleAction() {
        $form =$this->createForm( FormDemoModelType::class );
        return $this->render('AvanzuAdminThemeBundle:Default:add_meuble.html.twig', array(
                'form' => $form->createView()
            ));
    }


     /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function chatAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:chat.html.twig');
    }

     /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function mailAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:index.html.twig');
    }
   /* public function add_appartAction() {
        $form =$this->createForm( FormAddAppart::class );
        return $this->render('AvanzuAdminThemeBundle:Default:add_appart.html.twig', array(
                'form' => $form->createView()
            ));
    }
*/
    public function loginAction() {
        return $this->render('AvanzuAdminThemeBundle:Default:login.html.twig');
    }
}
