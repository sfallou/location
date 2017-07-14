<?php

namespace AppBundle\Controller;

use AppBundle\Entity\MeubleAppartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Meubleappartement controller.
 *
 * @Route("meubleappartement")
 */
class MeubleAppartementController extends Controller
{
    /**
     * Lists all meubleAppartement entities.
     *
     * @Route("/", name="meubleappartement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meubleAppartements = $em->getRepository('AppBundle:MeubleAppartement')->findAll();

        return $this->render('meubleappartement/index.html.twig', array(
            'meubleAppartements' => $meubleAppartements,
        ));
    }

    /**
     * Creates a new meubleAppartement entity.
     *
     * @Route("/new", name="meubleappartement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $meubleAppartement = new Meubleappartement();
        $form = $this->createForm('AppBundle\Form\MeubleAppartementType', $meubleAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meubleAppartement);
            $em->flush();

            return $this->redirectToRoute('meubleappartement_show', array('id' => $meubleAppartement->getId()));
        }

        return $this->render('meubleappartement/new.html.twig', array(
            'meubleAppartement' => $meubleAppartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a meubleAppartement entity.
     *
     * @Route("/{id}", name="meubleappartement_show")
     * @Method("GET")
     */
    public function showAction(MeubleAppartement $meubleAppartement)
    {
        $deleteForm = $this->createDeleteForm($meubleAppartement);

        return $this->render('meubleappartement/show.html.twig', array(
            'meubleAppartement' => $meubleAppartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing meubleAppartement entity.
     *
     * @Route("/{id}/edit", name="meubleappartement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, MeubleAppartement $meubleAppartement)
    {
        $deleteForm = $this->createDeleteForm($meubleAppartement);
        $editForm = $this->createForm('AppBundle\Form\MeubleAppartementType', $meubleAppartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meubleappartement_edit', array('id' => $meubleAppartement->getId()));
        }

        return $this->render('meubleappartement/edit.html.twig', array(
            'meubleAppartement' => $meubleAppartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a meubleAppartement entity.
     *
     * @Route("/{id}", name="meubleappartement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MeubleAppartement $meubleAppartement)
    {
        $form = $this->createDeleteForm($meubleAppartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($meubleAppartement);
            $em->flush();
        }

        return $this->redirectToRoute('meubleappartement_index');
    }

    /**
     * Creates a form to delete a meubleAppartement entity.
     *
     * @param MeubleAppartement $meubleAppartement The meubleAppartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MeubleAppartement $meubleAppartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('meubleappartement_delete', array('id' => $meubleAppartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
