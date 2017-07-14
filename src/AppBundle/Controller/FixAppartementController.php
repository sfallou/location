<?php

namespace AppBundle\Controller;

use AppBundle\Entity\FixAppartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Fixappartement controller.
 *
 * @Route("fixappartement")
 */
class FixAppartementController extends Controller
{
    /**
     * Lists all fixAppartement entities.
     *
     * @Route("/", name="fixappartement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fixAppartements = $em->getRepository('AppBundle:FixAppartement')->findAll();

        return $this->render('fixappartement/index.html.twig', array(
            'fixAppartements' => $fixAppartements,
        ));
    }

    /**
     * Creates a new fixAppartement entity.
     *
     * @Route("/new", name="fixappartement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fixAppartement = new Fixappartement();
        $form = $this->createForm('AppBundle\Form\FixAppartementType', $fixAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($fixAppartement);
            $em->flush();

            return $this->redirectToRoute('fixappartement_show', array('id' => $fixAppartement->getId()));
        }

        return $this->render('fixappartement/new.html.twig', array(
            'fixAppartement' => $fixAppartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a fixAppartement entity.
     *
     * @Route("/{id}", name="fixappartement_show")
     * @Method("GET")
     */
    public function showAction(FixAppartement $fixAppartement)
    {
        $deleteForm = $this->createDeleteForm($fixAppartement);

        return $this->render('fixappartement/show.html.twig', array(
            'fixAppartement' => $fixAppartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing fixAppartement entity.
     *
     * @Route("/{id}/edit", name="fixappartement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FixAppartement $fixAppartement)
    {
        $deleteForm = $this->createDeleteForm($fixAppartement);
        $editForm = $this->createForm('AppBundle\Form\FixAppartementType', $fixAppartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('fixappartement_edit', array('id' => $fixAppartement->getId()));
        }

        return $this->render('fixappartement/edit.html.twig', array(
            'fixAppartement' => $fixAppartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a fixAppartement entity.
     *
     * @Route("/{id}", name="fixappartement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, FixAppartement $fixAppartement)
    {
        $form = $this->createDeleteForm($fixAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fixAppartement);
            $em->flush();
        }

        return $this->redirectToRoute('fixappartement_index');
    }

    /**
     * Creates a form to delete a fixAppartement entity.
     *
     * @param FixAppartement $fixAppartement The fixAppartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FixAppartement $fixAppartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('fixappartement_delete', array('id' => $fixAppartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
