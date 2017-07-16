<?php

namespace AppBundle\Controller;

use AppBundle\Entity\TypeCharge;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Typecharge controller.
 *
 * @Route("typecharge")
 */
class TypeChargeController extends Controller
{
    /**
     * Lists all typeCharge entities.
     *
     * @Route("/", name="typecharge_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $typeCharges = $em->getRepository('AppBundle:TypeCharge')->findAll();

        return $this->render('typecharge/index.html.twig', array(
            'typeCharges' => $typeCharges,
        ));
    }

    /**
     * Creates a new typeCharge entity.
     *
     * @Route("/new", name="typecharge_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $typeCharge = new Typecharge();
        $form = $this->createForm('AppBundle\Form\TypeChargeType', $typeCharge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($typeCharge);
            $em->flush();

            return $this->redirectToRoute('typecharge_show', array('id' => $typeCharge->getId()));
        }

        return $this->render('typecharge/new.html.twig', array(
            'typeCharge' => $typeCharge,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a typeCharge entity.
     *
     * @Route("/{id}", name="typecharge_show")
     * @Method("GET")
     */
    public function showAction(TypeCharge $typeCharge)
    {
        $deleteForm = $this->createDeleteForm($typeCharge);

        return $this->render('typecharge/show.html.twig', array(
            'typeCharge' => $typeCharge,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing typeCharge entity.
     *
     * @Route("/{id}/edit", name="typecharge_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TypeCharge $typeCharge)
    {
        $deleteForm = $this->createDeleteForm($typeCharge);
        $editForm = $this->createForm('AppBundle\Form\TypeChargeType', $typeCharge);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('typecharge_edit', array('id' => $typeCharge->getId()));
        }

        return $this->render('typecharge/edit.html.twig', array(
            'typeCharge' => $typeCharge,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a typeCharge entity.
     *
     * @Route("/{id}", name="typecharge_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TypeCharge $typeCharge)
    {
        $form = $this->createDeleteForm($typeCharge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($typeCharge);
            $em->flush();
        }

        return $this->redirectToRoute('typecharge_index');
    }

    /**
     * Creates a form to delete a typeCharge entity.
     *
     * @param TypeCharge $typeCharge The typeCharge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TypeCharge $typeCharge)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('typecharge_delete', array('id' => $typeCharge->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
