<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserRoom;
use AppBundle\Form\UserRoomType;
use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\Appartement;
use AppBundle\Entity\Meuble;
use AppBundle\Entity\MeubleAppartementType;
use AppBundle\Entity\MeubleAppartement;
use AppBundle\Entity\FixAppartementType;
use AppBundle\Entity\FixAppartement;
use AppBundle\Entity\TypeFix;
use AppBundle\Entity\MeubleRoomType;
use AppBundle\Entity\MeubleRoom;
use AppBundle\Entity\FixRoomType;
use AppBundle\Entity\FixRoom;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;



class AssociationController extends Controller
{
   
    /**
     * Lists all unvalidated users.
     * @Route("/validation", name="validation_user")
     * @Method("GET")
     */
    public function validationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findByEnabled(0);

        return $this->render('association/validation.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Displays a form to validate an existing user entity.
     *
     * @Route("/{id}/validated", name="user_validated")
     * @Method({"GET", "POST"})
     */
    public function validatedAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $apparts = $em->getRepository('AppBundle:Appartement')->findAll();

        $resultats = array();

        foreach ($apparts as $appart){
            $rooms = $em->getRepository('AppBundle:Room')->findBy(array('id_appart'=>$appart->getId()));
            $resultats[$appart->getAdresse()] = $rooms;
        }

        $userRoom = new Userroom();
        $form = $this->createForm('AppBundle\Form\UserRoomType', $userRoom);
        $form->get('userId')->setData($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // On active le compte du user
            $user = $em->getRepository(User::class)->find($id);
            $user->setEnabled(true);
            $em->persist($userRoom);
            $em->flush();
            return $this->redirectToRoute('validation_user');
        }

        
        return $this->render('association/validationForm.html.twig', array(
            'apparts_rooms' =>$resultats,
            'form' => $form->createView()
        ));
    }

    /**
     * Displays a form to associate a furniture and an appart.
     *
     * @Route("/{id}/add_furniture_appart", name="add_furniture_appart")
     * @Method({"GET", "POST"})
     */
    public function addFurnitureAppartAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $meubles = $em->getRepository('AppBundle:Meuble')->findAll();

        $meubleAppart = new MeubleAppartement();
        $form = $this->createForm('AppBundle\Form\MeubleAppartementType', $meubleAppart);
        $form->get('appartId')->setData($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meubleAppart);
            $em->flush();
            return $this->redirectToRoute('appartement_index');
        }

        
        return $this->render('association/meubleAppartForm.html.twig', array(
            'meubles' =>$meubles,
            'form' => $form->createView()
        ));
    }

    /**
     * Displays a form to associate a fix and a appart
     *
     * @Route("/{id}/add_fix_appart", name="add_fix_appart")
     * @Method({"GET", "POST"})
     */
    public function addFixAppartAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fixTypes = $em->getRepository('AppBundle:TypeFix')->findAll();

        $fixAppart = new FixAppartement();
        $form = $this->createForm('AppBundle\Form\FixAppartementType', $fixAppart);
        $form->get('appartId')->setData($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fixAppart);
            $em->flush();

             $request->getSession()
                ->getFlashBag()
                ->add('success', 'La demande a été ajoutée dans la liste');
            return $this->redirectToRoute('appartement_index');
        }

        
        return $this->render('association/fixAppartForm.html.twig', array(
            'fixType' =>$fixTypes,
            'form' => $form->createView()
        ));
    }

    /**
     * Set fix_appart to "done"
     *
     * @Route("/{id}/fix_appart_done", name="fix_appart_done")
     * @Method({"GET", "POST"})
     */
    public function fixAppartDoneAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fix_appart = $em->getRepository(FixAppartement::class)->find($id);
        $fix_appart->setFixState(true);
        $em->persist($fix_appart);
        $em->flush();

         $request->getSession()
                ->getFlashBag()
                ->add('success', "l'état de la réparation a été modifiée!");
        return $this->redirectToRoute('appartement_show',array('id' => $id) );
    }


    /**
     * Set fix_appart to "undone"
     *
     * @Route("/{id}/fix_appart_undone", name="fix_appart_undone")
     * @Method({"GET", "POST"})
     */
    public function fixAppartUndoneAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fix_appart = $em->getRepository(FixAppartement::class)->find($id);
        $fix_appart->setFixState(false);
        $em->persist($fix_appart);
        $em->flush();
        $request->getSession()
                ->getFlashBag()
                ->add('success', "l'état de la réparation a été modifiée!");
        return $this->redirectToRoute('appartement_show',array('id' => $id) );
    }
    ///////////////////////////////////////////////////////////////////////
    /**
     * Displays a form to associate a furniture and a room.
     *
     * @Route("/{id}/add_furniture_room", name="add_furniture_room")
     * @Method({"GET", "POST"})
     */
    public function addFurnitureRoomAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $meubles = $em->getRepository('AppBundle:Meuble')->findAll();

        $meubleRoom = new MeubleRoom();
        $form = $this->createForm('AppBundle\Form\MeubleRoomType', $meubleRoom);
        $form->get('roomId')->setData($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meubleRoom);
            $em->flush();
            return $this->redirectToRoute('room_index');
        }

        
        return $this->render('association/meubleRoomForm.html.twig', array(
            'meubles' =>$meubles,
            'form' => $form->createView()
        ));
    }

    /**
     * Displays a form to associate a fix and a room
     *
     * @Route("/{id}/add_fix_room", name="add_fix_room")
     * @Method({"GET", "POST"})
     */
    public function addFixRoomAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fixTypes = $em->getRepository('AppBundle:TypeFix')->findAll();

        $fixRoom = new FixRoom();
        $form = $this->createForm('AppBundle\Form\FixRoomType', $fixRoom);
        $form->get('roomId')->setData($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fixRoom);
            $em->flush();

             $request->getSession()
                ->getFlashBag()
                ->add('success', 'La demande a été ajoutée dans la liste');
            return $this->redirectToRoute('room_index');
        }

        
        return $this->render('association/fixRoomForm.html.twig', array(
            'fixType' =>$fixTypes,
            'form' => $form->createView()
        ));
    }

    /**
     * Set fix_room to "done"
     *
     * @Route("/{id}/fix_room_done", name="fix_room_done")
     * @Method({"GET", "POST"})
     */
    public function fixRoomDoneAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fix_room = $em->getRepository(FixRoom::class)->find($id);
        $fix_room->setFixState(true);
        $em->persist($fix_room);
        $em->flush();

         $request->getSession()
                ->getFlashBag()
                ->add('success', "l'état de la réparation a été modifiée!");
        return $this->redirectToRoute('room_show',array('id' => $id) );
    }


    /**
     * Set fix_room to "undone"
     *
     * @Route("/{id}/fix_room_undone", name="fix_room_undone")
     * @Method({"GET", "POST"})
     */
    public function fixRoomUndoneAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $fix_room = $em->getRepository(FixRoom::class)->find($id);
        $fix_room->setFixState(false);
        $em->persist($fix_room);
        $em->flush();
        $request->getSession()
                ->getFlashBag()
                ->add('success', "l'état de la réparation a été modifiée!");
        return $this->redirectToRoute('room_show',array('id' => $id) );
    }
}

