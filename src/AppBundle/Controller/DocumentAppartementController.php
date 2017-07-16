<?php

namespace AppBundle\Controller;

use AppBundle\Entity\DocumentAppartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Documentappartement controller.
 *
 * @Route("documentappartement")
 */
class DocumentAppartementController extends Controller
{
    /**
     * Lists all documentAppartement entities.
     *
     * @Route("/", name="documentappartement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $documentAppartements = $em->getRepository('AppBundle:DocumentAppartement')->findAll();

        return $this->render('documentappartement/index.html.twig', array(
            'documentAppartements' => $documentAppartements,
        ));
    }

    /**
     * Creates a new documentAppartement entity.
     *
     * @Route("/new", name="documentappartement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $documentAppartement = new Documentappartement();
        $form = $this->createForm('AppBundle\Form\DocumentAppartementType', $documentAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($documentAppartement);
            $em->flush();

            return $this->redirectToRoute('documentappartement_show', array('id' => $documentAppartement->getId()));
        }

        return $this->render('documentappartement/new.html.twig', array(
            'documentAppartement' => $documentAppartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a documentAppartement entity.
     *
     * @Route("/{id}", name="documentappartement_show")
     * @Method("GET")
     */
    public function showAction(DocumentAppartement $documentAppartement)
    {
        $deleteForm = $this->createDeleteForm($documentAppartement);

        return $this->render('documentappartement/show.html.twig', array(
            'documentAppartement' => $documentAppartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing documentAppartement entity.
     *
     * @Route("/{id}/edit", name="documentappartement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DocumentAppartement $documentAppartement)
    {
        $deleteForm = $this->createDeleteForm($documentAppartement);
        $editForm = $this->createForm('AppBundle\Form\DocumentAppartementType', $documentAppartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('documentappartement_edit', array('id' => $documentAppartement->getId()));
        }

        return $this->render('documentappartement/edit.html.twig', array(
            'documentAppartement' => $documentAppartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a documentAppartement entity.
     *
     * @Route("/{id}", name="documentappartement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DocumentAppartement $documentAppartement)
    {
        $form = $this->createDeleteForm($documentAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($documentAppartement);
            $em->flush();
        }

        return $this->redirectToRoute('documentappartement_index');
    }

    /**
     * Creates a form to delete a documentAppartement entity.
     *
     * @param DocumentAppartement $documentAppartement The documentAppartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DocumentAppartement $documentAppartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('documentappartement_delete', array('id' => $documentAppartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
