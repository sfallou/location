<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Appartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Appartement controller.
 *
 * @Route("appartement")
 */
class AppartementController extends Controller
{
    /**
     * Lists all appartement entities.
     *
     * @Route("/", name="appartement_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $appartements = $em->getRepository('AppBundle:Appartement')->findAll();

        return $this->render('appartement/index.html.twig', array(
            'appartements' => $appartements,
        ));
    }

    /**
     * Creates a new appartement entity.
     *
     * @Route("/new", name="appartement_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $appartement = new Appartement();
        $form = $this->createForm('AppBundle\Form\AppartementType', $appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appartement);
            $em->flush();

            return $this->redirectToRoute('appartement_show', array('id' => $appartement->getId()));
        }

        return $this->render('appartement/new.html.twig', array(
            'appartement' => $appartement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a appartement entity.
     *
     * @Route("/{id}", name="appartement_show")
     * @Method("GET")
     */
    public function showAction(Appartement $appartement)
    {
        $deleteForm = $this->createDeleteForm($appartement);

        return $this->render('appartement/show.html.twig', array(
            'appartement' => $appartement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing appartement entity.
     *
     * @Route("/{id}/edit", name="appartement_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Appartement $appartement)
    {
        $deleteForm = $this->createDeleteForm($appartement);
        $editForm = $this->createForm('AppBundle\Form\AppartementType', $appartement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('appartement_edit', array('id' => $appartement->getId()));
        }

        return $this->render('appartement/edit.html.twig', array(
            'appartement' => $appartement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a appartement entity.
     *
     * @Route("/{id}", name="appartement_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Appartement $appartement)
    {
        $form = $this->createDeleteForm($appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($appartement);
            $em->flush();
        }

        return $this->redirectToRoute('appartement_index');
    }

    /**
     * Creates a form to delete a appartement entity.
     *
     * @param Appartement $appartement The appartement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Appartement $appartement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('appartement_delete', array('id' => $appartement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
