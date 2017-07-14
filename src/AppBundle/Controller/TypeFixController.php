<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeFix;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typefix controller.
 *
 * @Route("typefix")
 */
class TypeFixController extends Controller
{
    /**
     * Lists all typeFix entities.
     *
     * @Route("/", name="typefix_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeFixes = $em->getRepository('AppBundle:TypeFix')->findAll();

        return $this->render('typefix/index.html.twig', array(
            'typeFixes' => $typeFixes,
        ));
    }

    /**
     * Creates a new typeFix entity.
     *
     * @Route("/new", name="typefix_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeFix = new Typefix();
        $form = $this->createForm('AppBundle\Form\TypeFixType', $typeFix);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeFix);
            $em->flush();

            return $this->redirectToRoute('typefix_show', array('id' => $typeFix->getId()));
        }

        return $this->render('typefix/new.html.twig', array(
            'typeFix' => $typeFix,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeFix entity.
     *
     * @Route("/{id}", name="typefix_show")
     * @Method("GET")
     */
    public function showAction(TypeFix $typeFix)
    {
        $deleteForm = $this->createDeleteForm($typeFix);

        return $this->render('typefix/show.html.twig', array(
            'typeFix' => $typeFix,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeFix entity.
     *
     * @Route("/{id}/edit", name="typefix_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeFix $typeFix)
    {
        $deleteForm = $this->createDeleteForm($typeFix);
        $editForm = $this->createForm('AppBundle\Form\TypeFixType', $typeFix);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typefix_edit', array('id' => $typeFix->getId()));
        }

        return $this->render('typefix/edit.html.twig', array(
            'typeFix' => $typeFix,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeFix entity.
     *
     * @Route("/{id}", name="typefix_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeFix $typeFix)
    {
        $form = $this->createDeleteForm($typeFix);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeFix);
            $em->flush();
        }

        return $this->redirectToRoute('typefix_index');
    }

    /**
     * Creates a form to delete a typeFix entity.
     *
     * @param TypeFix $typeFix The typeFix entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeFix $typeFix)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typefix_delete', array('id' => $typeFix->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
