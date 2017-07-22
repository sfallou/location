<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\UserRoom;
use AppBundle\Entity\Appartement;
use AppBundle\Entity\Residence;
use AppBundle\Entity\MeubleRoom;
use AppBundle\Entity\Meuble;
use AppBundle\Entity\FixRoom;
use AppBundle\Entity\Fix;
use AppBundle\Entity\ChargeRoom;
use AppBundle\Entity\Charge;
use AppBundle\Entity\DocumentUserRoom;
use AppBundle\Entity\Document;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Room controller.
 *
 * @Route("room")
 */
class RoomController extends Controller
{
    /**
     * Lists all room entities.
     *
     * @Route("/", name="room_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rooms = $em->getRepository('AppBundle:Room')->findAll();

        return $this->render('room/index.html.twig', array(
            'rooms' => $rooms,
        ));
    }

    /**
     * Creates a new room entity.
     *
     * @Route("/new", name="room_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        $apparts = $em->getRepository('AppBundle:Appartement')->findAll();

        $room = new Room();
        $form = $this->createForm('AppBundle\Form\RoomType', $room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($room);
            $em->flush();

            return $this->redirectToRoute('room_show', array('id' => $room->getId()));
        }

        return $this->render('room/new.html.twig', array(
            'room' => $room,
            'apparts' => $apparts,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a room entity.
     *
     * @Route("/{id}", name="room_show")
     * @Method("GET")
     */
    public function showAction(Room $room)
    {
        $deleteForm = $this->createDeleteForm($room);
        $user = null;
        $meubles = null;
        $meubles_rooms = array();
        $fixs = null;
        $fix_rooms = array();
        $docs = null;
        $doc_user_rooms = array();
       
        $em = $this->getDoctrine()->getManager();
        
        $user_room = $em->getRepository('AppBundle:UserRoom')->findOneBy(array('roomId'=>$room->getId()));
        if ($user_room){
            $user = $em->getRepository('AppBundle:User')->findOneBy(array('id'=>$user_room->getUserId()));
        }
        $appart = $em->getRepository('AppBundle:Appartement')->findOneBy(array('id'=>$room->getIdAppart()));

        $meubles = $em->getRepository('AppBundle:MeubleRoom')->findBy(array('roomId'=>$room->getId()));
       
        if ($meubles){
            foreach ($meubles as $meuble ) {
                $meubles_rooms[] = $em->getRepository('AppBundle:Meuble')->findOneBy(array('id'=>$meuble->getMeubleId()));
            }
        }
        $fixs = $em->getRepository('AppBundle:FixRoom')->findBy(array('roomId'=>$room->getId()));
        
        if ($fixs){
            foreach ($fixs as $fix ) {
                $type =  $em->getRepository('AppBundle:TypeFix')->findOneBy(array('id'=>$fix->getFixId()));
                $fix_rooms[$type->getName()] = $fix;
            }
        }

        $charges = $em->getRepository('AppBundle:ChargeRoom')->findBy(array('roomId'=>$room->getId()));
        
        if ($charges){
            foreach ($charges as $charge ) {
                $type =  $em->getRepository('AppBundle:TypeCharge')->findOneBy(array('id'=>$charge->getChargeId()));
                $charge_rooms[$type->getName()] = $charge;
            }
        }

        $docs = $em->getRepository('AppBundle:DocumentUserRoom')->findBy(array('userRoomId'=>$user_room->getId()));
        
        if ($docs){
            foreach ($docs as $doc ) {
                $type =  $em->getRepository('AppBundle:TypeDocument')->findOneBy(array('id'=>$doc->getDocumentId()));
                $doc_user_rooms[$type->getName()] = $doc;
            }
        }
    
        return $this->render('room/show.html.twig', array(
            'room' => $room,
            'user' => $user,
            'user_room' => $user_room,
            'appart' => $appart,
            'meubles' =>$meubles_rooms,
            'fixs' => $fix_rooms,
            'charges' => $charge_rooms,
            'documents' => $doc_user_rooms,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing room entity.
     *
     * @Route("/{id}/edit", name="room_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Room $room)
    {
        $deleteForm = $this->createDeleteForm($room);
        $editForm = $this->createForm('AppBundle\Form\RoomType', $room);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('room_edit', array('id' => $room->getId()));
        }

        return $this->render('room/edit.html.twig', array(
            'room' => $room,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a room entity.
     *
     * @Route("/{id}", name="room_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Room $room)
    {
        $form = $this->createDeleteForm($room);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($room);
            $em->flush();
        }

        return $this->redirectToRoute('room_index');
    }

    /**
     * Creates a form to delete a room entity.
     *
     * @param Room $room The room entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Room $room)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('room_delete', array('id' => $room->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
