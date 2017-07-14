<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MeubleRoom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Meubleroom controller.
 *
 * @Route("meubleroom")
 */
class MeubleRoomController extends Controller
{
    /**
     * Lists all meubleRoom entities.
     *
     * @Route("/", name="meubleroom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meubleRooms = $em->getRepository('AppBundle:MeubleRoom')->findAll();

        return $this->render('meubleroom/index.html.twig', array(
            'meubleRooms' => $meubleRooms,
        ));
    }

    /**
     * Creates a new meubleRoom entity.
     *
     * @Route("/new", name="meubleroom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $meubleRoom = new Meubleroom();
        $form = $this->createForm('AppBundle\Form\MeubleRoomType', $meubleRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meubleRoom);
            $em->flush();

            return $this->redirectToRoute('meubleroom_show', array('id' => $meubleRoom->getId()));
        }

        return $this->render('meubleroom/new.html.twig', array(
            'meubleRoom' => $meubleRoom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a meubleRoom entity.
     *
     * @Route("/{id}", name="meubleroom_show")
     * @Method("GET")
     */
    public function showAction(MeubleRoom $meubleRoom)
    {
        $deleteForm = $this->createDeleteForm($meubleRoom);

        return $this->render('meubleroom/show.html.twig', array(
            'meubleRoom' => $meubleRoom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing meubleRoom entity.
     *
     * @Route("/{id}/edit", name="meubleroom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MeubleRoom $meubleRoom)
    {
        $deleteForm = $this->createDeleteForm($meubleRoom);
        $editForm = $this->createForm('AppBundle\Form\MeubleRoomType', $meubleRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meubleroom_edit', array('id' => $meubleRoom->getId()));
        }

        return $this->render('meubleroom/edit.html.twig', array(
            'meubleRoom' => $meubleRoom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a meubleRoom entity.
     *
     * @Route("/{id}", name="meubleroom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MeubleRoom $meubleRoom)
    {
        $form = $this->createDeleteForm($meubleRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($meubleRoom);
            $em->flush();
        }

        return $this->redirectToRoute('meubleroom_index');
    }

    /**
     * Creates a form to delete a meubleRoom entity.
     *
     * @param MeubleRoom $meubleRoom The meubleRoom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MeubleRoom $meubleRoom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('meubleroom_delete', array('id' => $meubleRoom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
