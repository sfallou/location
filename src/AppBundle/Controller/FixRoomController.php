<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FixRoom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fixroom controller.
 *
 * @Route("fixroom")
 */
class FixRoomController extends Controller
{
    /**
     * Lists all fixRoom entities.
     *
     * @Route("/", name="fixroom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fixRooms = $em->getRepository('AppBundle:FixRoom')->findAll();

        return $this->render('fixroom/index.html.twig', array(
            'fixrooms' => $fixRooms,
        ));
    }

    /**
     * Creates a new fixRoom entity.
     *
     * @Route("/new", name="fixroom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fixRoom = new FixRoom();
        $form = $this->createForm('AppBundle\Form\FixRoomType', $fixRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fixRoom);
            $em->flush();

            return $this->redirectToRoute('fixroom_show', array('id' => $fixRoom->getId()));
        }

        return $this->render('fixroom/new.html.twig', array(
            'fixroom' => $fixRoom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fixRoom entity.
     *
     * @Route("/{id}", name="fixroom_show")
     * @Method("GET")
     */
    public function showAction(FixRoom $fixRoom)
    {
        $deleteForm = $this->createDeleteForm($fixRoom);

        return $this->render('fixroom/show.html.twig', array(
            'fixroom' => $fixRoom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fixRoom entity.
     *
     * @Route("/{id}/edit", name="fixroom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FixRoom $fixRoom)
    {
        $deleteForm = $this->createDeleteForm($fixRoom);
        $editForm = $this->createForm('AppBundle\Form\FixRoomType', $fixRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fixroom_edit', array('id' => $fixRoom->getId()));
        }

        return $this->render('fixroom/edit.html.twig', array(
            'fixroom' => $fixRoom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fixRoom entity.
     *
     * @Route("/{id}", name="fixroom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FixRoom $fixRoom)
    {
        $form = $this->createDeleteForm($fixRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fixRoom);
            $em->flush();
        }

        return $this->redirectToRoute('fixroom_index');
    }

    /**
     * Creates a form to delete a fixRoom entity.
     *
     * @param FixRoom $fixRoom The fixRoom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FixRoom $fixRoom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fixroom_delete', array('id' => $fixRoom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}


