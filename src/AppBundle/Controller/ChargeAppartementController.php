<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ChargeAppartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Chargeappartement controller.
 *
 * @Route("chargeappartement")
 */
class ChargeAppartementController extends Controller
{
    /**
     * Lists all chargeAppartement entities.
     *
     * @Route("/", name="chargeappartement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chargeAppartements = $em->getRepository('AppBundle:ChargeAppartement')->findAll();

        return $this->render('chargeappartement/index.html.twig', array(
            'chargeAppartements' => $chargeAppartements,
        ));
    }

    /**
     * Creates a new chargeAppartement entity.
     *
     * @Route("/new", name="chargeappartement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $chargeAppartement = new Chargeappartement();
        $form = $this->createForm('AppBundle\Form\ChargeAppartementType', $chargeAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($chargeAppartement);
            $em->flush();

            return $this->redirectToRoute('chargeappartement_show', array('id' => $chargeAppartement->getId()));
        }

        return $this->render('chargeappartement/new.html.twig', array(
            'chargeAppartement' => $chargeAppartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a chargeAppartement entity.
     *
     * @Route("/{id}", name="chargeappartement_show")
     * @Method("GET")
     */
    public function showAction(ChargeAppartement $chargeAppartement)
    {
        $deleteForm = $this->createDeleteForm($chargeAppartement);

        return $this->render('chargeappartement/show.html.twig', array(
            'chargeAppartement' => $chargeAppartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing chargeAppartement entity.
     *
     * @Route("/{id}/edit", name="chargeappartement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ChargeAppartement $chargeAppartement)
    {
        $deleteForm = $this->createDeleteForm($chargeAppartement);
        $editForm = $this->createForm('AppBundle\Form\ChargeAppartementType', $chargeAppartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chargeappartement_edit', array('id' => $chargeAppartement->getId()));
        }

        return $this->render('chargeappartement/edit.html.twig', array(
            'chargeAppartement' => $chargeAppartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a chargeAppartement entity.
     *
     * @Route("/{id}", name="chargeappartement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ChargeAppartement $chargeAppartement)
    {
        $form = $this->createDeleteForm($chargeAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($chargeAppartement);
            $em->flush();
        }

        return $this->redirectToRoute('chargeappartement_index');
    }

    /**
     * Creates a form to delete a chargeAppartement entity.
     *
     * @param ChargeAppartement $chargeAppartement The chargeAppartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ChargeAppartement $chargeAppartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chargeappartement_delete', array('id' => $chargeAppartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
