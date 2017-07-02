<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Residence;
use AppBundle\Form\ResidenceType;
use AppBundle\Entity\Appartement;
use AppBundle\Form\AppartementType;
use AppBundle\Entity\Room;
use AppBundle\Form\RoomType;
use AppBundle\Entity\TypeMeuble;
use AppBundle\Form\TypeMeubleType;
use AppBundle\Entity\Meuble;
use AppBundle\Form\MeubleType;


class DefaultController extends Controller
{
    /**
     * @Route("/default", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }

    ///////////////////////////////    
     public function newResidenceAction(Request $request)
    {
        // 1) build the form
        $residence = new Residence();
        $form =$this->createForm( ResidenceType::class, $residence );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) save the residence!
            $em = $this->getDoctrine()->getManager();
            $em->persist($residence);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'La résidence a été bien ajoutée!');

            return $this->redirectToRoute('admin_form_residence');
        }

        return $this->render(
            'default/new_residence.html.twig',
            array('form' => $form->createView())
        );
    }

    
    public function listeResidenceAction() { 
        $residences = $this->getDoctrine()
            ->getRepository('AppBundle:Residence')
            ->findAll();

        return $this->render('default/liste_residence.html.twig', array(
                'residences' => $residences
            ));
    }

    public function showResidenceAction($id) { 
        $residence = $this->getDoctrine()
            ->getRepository('AppBundle:Residence')
            ->find($id);
        $apparts = $this->getDoctrine()
            ->getRepository('AppBundle:Appartement')
            ->findBy(array('id_residence' => $id));

        return $this->render('default/show_residence.html.twig', array(
                'residence' => $residence,
                'apparts' => $apparts
            ));
    }

    ///////////////////////////////
     public function newAppartAction(Request $request)
    {
        // 1) build the form
        $appart = new Appartement();
        $form =$this->createForm( AppartementType::class, $appart );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) save the appart!
            $em = $this->getDoctrine()->getManager();
            $em->persist($appart);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Appartement ajouté avec succès!');

            return $this->redirectToRoute('admin_form_appart');
        }

        return $this->render(
            'default/new_appart.html.twig',
            array('form' => $form->createView())
        );
    }

    
    public function listeAppartAction() { 
        $apparts = $this->getDoctrine()
            ->getRepository('AppBundle:Appartement')
            ->findAll();

        return $this->render('default/liste_appart.html.twig', array(
                'apparts' => $apparts
            ));
    }

     public function showAppartAction($id) { 
        $appart = $this->getDoctrine()
            ->getRepository('AppBundle:Appartement')
            ->find($id);
        $rooms = $this->getDoctrine()
            ->getRepository('AppBundle:Room')
            ->findBy(array('id_appart' => $id));


        return $this->render('default/show_appart.html.twig', array(
                'appart' => $appart,
                'rooms' => $rooms,
            ));
    }
    ///////////////////////////////
      public function newRoomAction(Request $request)
    {
        // 1) build the form
        $room = new Room();
        $form =$this->createForm( RoomType::class, $room );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) save the room!
            $em = $this->getDoctrine()->getManager();
            $em->persist($room);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Chambre ajoutée avec succès!');

            return $this->redirectToRoute('admin_form_room');
        }

        return $this->render(
            'default/new_room.html.twig',
            array('form' => $form->createView())
        );
    }

    
    public function listeRoomAction() { 
        $rooms = $this->getDoctrine()
            ->getRepository('AppBundle:Room')
            ->findAll();

        return $this->render('default/liste_room.html.twig', array(
                'rooms' => $rooms
            ));
    }

     public function showRoomAction($id) { 
        $room = $this->getDoctrine()
            ->getRepository('AppBundle:Room')
            ->find($id);

        return $this->render('default/show_room.html.twig', array(
                'room' => $room
            ));
    }

    ///////////////////////////////
    public function newTypeMeubleAction(Request $request)
    {
        // 1) build the form
        $type_meuble = new TypeMeuble();
        $form =$this->createForm( TypeMeubleType::class, $type_meuble );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) save the appart!
            $em = $this->getDoctrine()->getManager();
            $em->persist($type_meuble);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Type de meuble ajouté avec succès!');

            return $this->redirectToRoute('admin_form_type_meuble');
        }

        return $this->render(
            'default/new_type_meuble.html.twig',
            array('form' => $form->createView())
        );
    }

    
    public function listeTypeMeubleAction() { 
        $meubles = $this->getDoctrine()
            ->getRepository('AppBundle:TypeMeuble')
            ->findAll();

        return $this->render('default/liste_type_meuble.html.twig', array(
                'type_meubles' => $meubles
            ));
    }
    ///////////////////////////////
    public function newMeubleAction(Request $request)
    {
        // 1) build the form
        $meuble = new Meuble();
        $form =$this->createForm( MeubleType::class, $meuble );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) save the appart!
            $em = $this->getDoctrine()->getManager();
            $em->persist($meuble);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Meuble ajouté avec succès!');

            return $this->redirectToRoute('admin_form_meuble');
        }

        return $this->render(
            'default/new_meuble.html.twig',
            array('form' => $form->createView())
        );
    }

    
    public function listeMeubleAction() { 
        $meubles = $this->getDoctrine()
            ->getRepository('AppBundle:Meuble')
            ->findAll();

        return $this->render('default/liste_meuble.html.twig', array(
                'meubles' => $meubles
            ));
    }

     ///////////////////////////////
    public function newMeubleAppartAction($id, Request $request)
    {
        /*// 1) build the form
        $meuble = new Meuble();
        $form =$this->createForm( MeubleType::class, $meuble );

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            //3) save the appart!
            $em = $this->getDoctrine()->getManager();
            $em->persist($meuble);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $request->getSession()
                ->getFlashBag()
                ->add('success', 'Meuble ajouté avec succès!');

            return $this->redirectToRoute('admin_form_meuble');
        }
    
        return $this->render(
            'default/new_meuble.html.twig',
            array('form' => $form->createView())
        );*/

        return $this->redirectToRoute('admin_liste_appart');
    }

}