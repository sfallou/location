<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DocumentUserRoom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Documentuserroom controller.
 *
 * @Route("documentuserroom")
 */
class DocumentUserRoomController extends Controller
{
    /**
     * Lists all documentUserRoom entities.
     *
     * @Route("/", name="documentuserroom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentUserRooms = $em->getRepository('AppBundle:DocumentUserRoom')->findAll();

        return $this->render('documentuserroom/index.html.twig', array(
            'documentUserRooms' => $documentUserRooms,
        ));
    }

    /**
     * Creates a new documentUserRoom entity.
     *
     * @Route("/new", name="documentuserroom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $documentUserRoom = new Documentuserroom();
        $form = $this->createForm('AppBundle\Form\DocumentUserRoomType', $documentUserRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($documentUserRoom);
            $em->flush();

            return $this->redirectToRoute('documentuserroom_show', array('id' => $documentUserRoom->getId()));
        }

        return $this->render('documentuserroom/new.html.twig', array(
            'documentUserRoom' => $documentUserRoom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a documentUserRoom entity.
     *
     * @Route("/{id}", name="documentuserroom_show")
     * @Method("GET")
     */
    public function showAction(DocumentUserRoom $documentUserRoom)
    {
        $deleteForm = $this->createDeleteForm($documentUserRoom);

        return $this->render('documentuserroom/show.html.twig', array(
            'documentUserRoom' => $documentUserRoom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing documentUserRoom entity.
     *
     * @Route("/{id}/edit", name="documentuserroom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DocumentUserRoom $documentUserRoom)
    {
        $deleteForm = $this->createDeleteForm($documentUserRoom);
        $editForm = $this->createForm('AppBundle\Form\DocumentUserRoomType', $documentUserRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('documentuserroom_edit', array('id' => $documentUserRoom->getId()));
        }

        return $this->render('documentuserroom/edit.html.twig', array(
            'documentUserRoom' => $documentUserRoom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a documentUserRoom entity.
     *
     * @Route("/{id}", name="documentuserroom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DocumentUserRoom $documentUserRoom)
    {
        $form = $this->createDeleteForm($documentUserRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($documentUserRoom);
            $em->flush();
        }

        return $this->redirectToRoute('documentuserroom_index');
    }

    /**
     * Creates a form to delete a documentUserRoom entity.
     *
     * @param DocumentUserRoom $documentUserRoom The documentUserRoom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DocumentUserRoom $documentUserRoom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentuserroom_delete', array('id' => $documentUserRoom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
