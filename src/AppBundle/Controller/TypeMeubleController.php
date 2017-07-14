<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeMeuble;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typemeuble controller.
 *
 * @Route("typemeuble")
 */
class TypeMeubleController extends Controller
{
    /**
     * Lists all typeMeuble entities.
     *
     * @Route("/", name="typemeuble_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeMeubles = $em->getRepository('AppBundle:TypeMeuble')->findAll();

        return $this->render('typemeuble/index.html.twig', array(
            'typeMeubles' => $typeMeubles,
        ));
    }

    /**
     * Creates a new typeMeuble entity.
     *
     * @Route("/new", name="typemeuble_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeMeuble = new Typemeuble();
        $form = $this->createForm('AppBundle\Form\TypeMeubleType', $typeMeuble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeMeuble);
            $em->flush();

            return $this->redirectToRoute('typemeuble_show', array('id' => $typeMeuble->getId()));
        }

        return $this->render('typemeuble/new.html.twig', array(
            'typemeuble' => $typeMeuble,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeMeuble entity.
     *
     * @Route("/{id}", name="typemeuble_show")
     * @Method("GET")
     */
    public function showAction(TypeMeuble $typeMeuble)
    {
        $deleteForm = $this->createDeleteForm($typeMeuble);

        return $this->render('typemeuble/show.html.twig', array(
            'typemeuble' => $typeMeuble,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeMeuble entity.
     *
     * @Route("/{id}/edit", name="typemeuble_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeMeuble $typeMeuble)
    {
        $deleteForm = $this->createDeleteForm($typeMeuble);
        $editForm = $this->createForm('AppBundle\Form\TypeMeubleType', $typeMeuble);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typemeuble_edit', array('id' => $typeMeuble->getId()));
        }

        return $this->render('typemeuble/edit.html.twig', array(
            'typeMeuble' => $typeMeuble,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeMeuble entity.
     *
     * @Route("/{id}", name="typemeuble_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeMeuble $typeMeuble)
    {
        $form = $this->createDeleteForm($typeMeuble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeMeuble);
            $em->flush();
        }

        return $this->redirectToRoute('typemeuble_index');
    }

    /**
     * Creates a form to delete a typeMeuble entity.
     *
     * @param TypeMeuble $typeMeuble The typeMeuble entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeMeuble $typeMeuble)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typemeuble_delete', array('id' => $typeMeuble->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
