<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeContact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typecontact controller.
 *
 * @Route("typecontact")
 */
class TypeContactController extends Controller
{
    /**
     * Lists all typeContact entities.
     *
     * @Route("/", name="typecontact_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeContacts = $em->getRepository('AppBundle:TypeContact')->findAll();

        return $this->render('typecontact/index.html.twig', array(
            'typeContacts' => $typeContacts,
        ));
    }

    /**
     * Creates a new typeContact entity.
     *
     * @Route("/new", name="typecontact_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeContact = new Typecontact();
        $form = $this->createForm('AppBundle\Form\TypeContactType', $typeContact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeContact);
            $em->flush();

            return $this->redirectToRoute('typecontact_show', array('id' => $typeContact->getId()));
        }

        return $this->render('typecontact/new.html.twig', array(
            'typeContact' => $typeContact,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeContact entity.
     *
     * @Route("/{id}", name="typecontact_show")
     * @Method("GET")
     */
    public function showAction(TypeContact $typeContact)
    {
        $deleteForm = $this->createDeleteForm($typeContact);

        return $this->render('typecontact/show.html.twig', array(
            'typeContact' => $typeContact,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeContact entity.
     *
     * @Route("/{id}/edit", name="typecontact_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeContact $typeContact)
    {
        $deleteForm = $this->createDeleteForm($typeContact);
        $editForm = $this->createForm('AppBundle\Form\TypeContactType', $typeContact);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typecontact_edit', array('id' => $typeContact->getId()));
        }

        return $this->render('typecontact/edit.html.twig', array(
            'typeContact' => $typeContact,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeContact entity.
     *
     * @Route("/{id}", name="typecontact_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeContact $typeContact)
    {
        $form = $this->createDeleteForm($typeContact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeContact);
            $em->flush();
        }

        return $this->redirectToRoute('typecontact_index');
    }

    /**
     * Creates a form to delete a typeContact entity.
     *
     * @param TypeContact $typeContact The typeContact entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeContact $typeContact)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typecontact_delete', array('id' => $typeContact->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
