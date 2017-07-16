<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ChargeRoom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Chargeroom controller.
 *
 * @Route("chargeroom")
 */
class ChargeRoomController extends Controller
{
    /**
     * Lists all chargeRoom entities.
     *
     * @Route("/", name="chargeroom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chargeRooms = $em->getRepository('AppBundle:ChargeRoom')->findAll();

        return $this->render('chargeroom/index.html.twig', array(
            'chargeRooms' => $chargeRooms,
        ));
    }

    /**
     * Creates a new chargeRoom entity.
     *
     * @Route("/new", name="chargeroom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chargeRoom = new Chargeroom();
        $form = $this->createForm('AppBundle\Form\ChargeRoomType', $chargeRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chargeRoom);
            $em->flush();

            return $this->redirectToRoute('chargeroom_show', array('id' => $chargeRoom->getId()));
        }

        return $this->render('chargeroom/new.html.twig', array(
            'chargeRoom' => $chargeRoom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chargeRoom entity.
     *
     * @Route("/{id}", name="chargeroom_show")
     * @Method("GET")
     */
    public function showAction(ChargeRoom $chargeRoom)
    {
        $deleteForm = $this->createDeleteForm($chargeRoom);

        return $this->render('chargeroom/show.html.twig', array(
            'chargeRoom' => $chargeRoom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chargeRoom entity.
     *
     * @Route("/{id}/edit", name="chargeroom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ChargeRoom $chargeRoom)
    {
        $deleteForm = $this->createDeleteForm($chargeRoom);
        $editForm = $this->createForm('AppBundle\Form\ChargeRoomType', $chargeRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chargeroom_edit', array('id' => $chargeRoom->getId()));
        }

        return $this->render('chargeroom/edit.html.twig', array(
            'chargeRoom' => $chargeRoom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chargeRoom entity.
     *
     * @Route("/{id}", name="chargeroom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ChargeRoom $chargeRoom)
    {
        $form = $this->createDeleteForm($chargeRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chargeRoom);
            $em->flush();
        }

        return $this->redirectToRoute('chargeroom_index');
    }

    /**
     * Creates a form to delete a chargeRoom entity.
     *
     * @param ChargeRoom $chargeRoom The chargeRoom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChargeRoom $chargeRoom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chargeroom_delete', array('id' => $chargeRoom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
