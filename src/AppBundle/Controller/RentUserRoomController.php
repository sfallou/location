<?php

namespace AppBundle\Controller;

use AppBundle\Entity\RentUserRoom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Rentuserroom controller.
 *
 * @Route("rentuserroom")
 */
class RentUserRoomController extends Controller
{
    /**
     * Lists all rentUserRoom entities.
     *
     * @Route("/", name="rentuserroom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rentUserRooms = $em->getRepository('AppBundle:RentUserRoom')->findAll();

        return $this->render('rentuserroom/index.html.twig', array(
            'rentUserRooms' => $rentUserRooms,
        ));
    }

    /**
     * Creates a new rentUserRoom entity.
     *
     * @Route("/new", name="rentuserroom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $rentUserRoom = new Rentuserroom();
        $form = $this->createForm('AppBundle\Form\RentUserRoomType', $rentUserRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($rentUserRoom);
            $em->flush();

            return $this->redirectToRoute('rentuserroom_show', array('id' => $rentUserRoom->getId()));
        }

        return $this->render('rentuserroom/new.html.twig', array(
            'rentUserRoom' => $rentUserRoom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rentUserRoom entity.
     *
     * @Route("/{id}", name="rentuserroom_show")
     * @Method("GET")
     */
    public function showAction(RentUserRoom $rentUserRoom)
    {
        $deleteForm = $this->createDeleteForm($rentUserRoom);

        return $this->render('rentuserroom/show.html.twig', array(
            'rentUserRoom' => $rentUserRoom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rentUserRoom entity.
     *
     * @Route("/{id}/edit", name="rentuserroom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, RentUserRoom $rentUserRoom)
    {
        $deleteForm = $this->createDeleteForm($rentUserRoom);
        $editForm = $this->createForm('AppBundle\Form\RentUserRoomType', $rentUserRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rentuserroom_edit', array('id' => $rentUserRoom->getId()));
        }

        return $this->render('rentuserroom/edit.html.twig', array(
            'rentUserRoom' => $rentUserRoom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rentUserRoom entity.
     *
     * @Route("/{id}", name="rentuserroom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, RentUserRoom $rentUserRoom)
    {
        $form = $this->createDeleteForm($rentUserRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rentUserRoom);
            $em->flush();
        }

        return $this->redirectToRoute('rentuserroom_index');
    }

    /**
     * Creates a form to delete a rentUserRoom entity.
     *
     * @param RentUserRoom $rentUserRoom The rentUserRoom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(RentUserRoom $rentUserRoom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rentuserroom_delete', array('id' => $rentUserRoom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
