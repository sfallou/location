<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ContactAppartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Contactappartement controller.
 *
 * @Route("contactappartement")
 */
class ContactAppartementController extends Controller
{
    /**
     * Lists all contactAppartement entities.
     *
     * @Route("/", name="contactappartement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contactAppartements = $em->getRepository('AppBundle:ContactAppartement')->findAll();

        return $this->render('contactappartement/index.html.twig', array(
            'contactAppartements' => $contactAppartements,
        ));
    }

    /**
     * Creates a new contactAppartement entity.
     *
     * @Route("/new", name="contactappartement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contactAppartement = new Contactappartement();
        $form = $this->createForm('AppBundle\Form\ContactAppartementType', $contactAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($contactAppartement);
            $em->flush();

            return $this->redirectToRoute('contactappartement_show', array('id' => $contactAppartement->getId()));
        }

        return $this->render('contactappartement/new.html.twig', array(
            'contactAppartement' => $contactAppartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a contactAppartement entity.
     *
     * @Route("/{id}", name="contactappartement_show")
     * @Method("GET")
     */
    public function showAction(ContactAppartement $contactAppartement)
    {
        $deleteForm = $this->createDeleteForm($contactAppartement);

        return $this->render('contactappartement/show.html.twig', array(
            'contactAppartement' => $contactAppartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing contactAppartement entity.
     *
     * @Route("/{id}/edit", name="contactappartement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ContactAppartement $contactAppartement)
    {
        $deleteForm = $this->createDeleteForm($contactAppartement);
        $editForm = $this->createForm('AppBundle\Form\ContactAppartementType', $contactAppartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('contactappartement_edit', array('id' => $contactAppartement->getId()));
        }

        return $this->render('contactappartement/edit.html.twig', array(
            'contactAppartement' => $contactAppartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a contactAppartement entity.
     *
     * @Route("/{id}", name="contactappartement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ContactAppartement $contactAppartement)
    {
        $form = $this->createDeleteForm($contactAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contactAppartement);
            $em->flush();
        }

        return $this->redirectToRoute('contactappartement_index');
    }

    /**
     * Creates a form to delete a contactAppartement entity.
     *
     * @param ContactAppartement $contactAppartement The contactAppartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ContactAppartement $contactAppartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('contactappartement_delete', array('id' => $contactAppartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
