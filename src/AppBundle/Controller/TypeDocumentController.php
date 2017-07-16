<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeDocument;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typedocument controller.
 *
 * @Route("typedocument")
 */
class TypeDocumentController extends Controller
{
    /**
     * Lists all typeDocument entities.
     *
     * @Route("/", name="typedocument_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeDocuments = $em->getRepository('AppBundle:TypeDocument')->findAll();

        return $this->render('typedocument/index.html.twig', array(
            'typeDocuments' => $typeDocuments,
        ));
    }

    /**
     * Creates a new typeDocument entity.
     *
     * @Route("/new", name="typedocument_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeDocument = new Typedocument();
        $form = $this->createForm('AppBundle\Form\TypeDocumentType', $typeDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeDocument);
            $em->flush();

            return $this->redirectToRoute('typedocument_show', array('id' => $typeDocument->getId()));
        }

        return $this->render('typedocument/new.html.twig', array(
            'typeDocument' => $typeDocument,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeDocument entity.
     *
     * @Route("/{id}", name="typedocument_show")
     * @Method("GET")
     */
    public function showAction(TypeDocument $typeDocument)
    {
        $deleteForm = $this->createDeleteForm($typeDocument);

        return $this->render('typedocument/show.html.twig', array(
            'typeDocument' => $typeDocument,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeDocument entity.
     *
     * @Route("/{id}/edit", name="typedocument_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeDocument $typeDocument)
    {
        $deleteForm = $this->createDeleteForm($typeDocument);
        $editForm = $this->createForm('AppBundle\Form\TypeDocumentType', $typeDocument);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typedocument_edit', array('id' => $typeDocument->getId()));
        }

        return $this->render('typedocument/edit.html.twig', array(
            'typeDocument' => $typeDocument,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeDocument entity.
     *
     * @Route("/{id}", name="typedocument_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeDocument $typeDocument)
    {
        $form = $this->createDeleteForm($typeDocument);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeDocument);
            $em->flush();
        }

        return $this->redirectToRoute('typedocument_index');
    }

    /**
     * Creates a form to delete a typeDocument entity.
     *
     * @param TypeDocument $typeDocument The typeDocument entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeDocument $typeDocument)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typedocument_delete', array('id' => $typeDocument->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
