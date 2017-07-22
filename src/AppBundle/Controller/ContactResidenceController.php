<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ContactResidence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contactresidence controller.
 *
 * @Route("contactresidence")
 */
class ContactResidenceController extends Controller
{
    /**
     * Lists all contactResidence entities.
     *
     * @Route("/", name="contactresidence_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contactResidences = $em->getRepository('AppBundle:ContactResidence')->findAll();

        return $this->render('contactresidence/index.html.twig', array(
            'contactResidences' => $contactResidences,
        ));
    }

    /**
     * Creates a new contactResidence entity.
     *
     * @Route("/new", name="contactresidence_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contactResidence = new Contactresidence();
        $form = $this->createForm('AppBundle\Form\ContactResidenceType', $contactResidence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactResidence);
            $em->flush();

            return $this->redirectToRoute('contactresidence_show', array('id' => $contactResidence->getId()));
        }

        return $this->render('contactresidence/new.html.twig', array(
            'contactResidence' => $contactResidence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contactResidence entity.
     *
     * @Route("/{id}", name="contactresidence_show")
     * @Method("GET")
     */
    public function showAction(ContactResidence $contactResidence)
    {
        $deleteForm = $this->createDeleteForm($contactResidence);

        return $this->render('contactresidence/show.html.twig', array(
            'contactResidence' => $contactResidence,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contactResidence entity.
     *
     * @Route("/{id}/edit", name="contactresidence_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ContactResidence $contactResidence)
    {
        $deleteForm = $this->createDeleteForm($contactResidence);
        $editForm = $this->createForm('AppBundle\Form\ContactResidenceType', $contactResidence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactresidence_edit', array('id' => $contactResidence->getId()));
        }

        return $this->render('contactresidence/edit.html.twig', array(
            'contactResidence' => $contactResidence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contactResidence entity.
     *
     * @Route("/{id}", name="contactresidence_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ContactResidence $contactResidence)
    {
        $form = $this->createDeleteForm($contactResidence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contactResidence);
            $em->flush();
        }

        return $this->redirectToRoute('contactresidence_index');
    }

    /**
     * Creates a form to delete a contactResidence entity.
     *
     * @param ContactResidence $contactResidence The contactResidence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ContactResidence $contactResidence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactresidence_delete', array('id' => $contactResidence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
