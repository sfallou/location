<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Meuble;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Meuble controller.
 *
 * @Route("meuble")
 */
class MeubleController extends Controller
{
    /**
     * Lists all meuble entities.
     *
     * @Route("/", name="meuble_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $meubles = $em->getRepository('AppBundle:Meuble')->findAll();

        return $this->render('meuble/index.html.twig', array(
            'meubles' => $meubles,
        ));
    }

    /**
     * Creates a new meuble entity.
     *
     * @Route("/new", name="meuble_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $meuble = new Meuble();
        $form = $this->createForm('AppBundle\Form\MeubleType', $meuble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($meuble);
            $em->flush();

            return $this->redirectToRoute('meuble_show', array('id' => $meuble->getId()));
        }

        return $this->render('meuble/new.html.twig', array(
            'meuble' => $meuble,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a meuble entity.
     *
     * @Route("/{id}", name="meuble_show")
     * @Method("GET")
     */
    public function showAction(Meuble $meuble)
    {
        $deleteForm = $this->createDeleteForm($meuble);

        return $this->render('meuble/show.html.twig', array(
            'meuble' => $meuble,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing meuble entity.
     *
     * @Route("/{id}/edit", name="meuble_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Meuble $meuble)
    {
        $deleteForm = $this->createDeleteForm($meuble);
        $editForm = $this->createForm('AppBundle\Form\MeubleType', $meuble);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('meuble_edit', array('id' => $meuble->getId()));
        }

        return $this->render('meuble/edit.html.twig', array(
            'meuble' => $meuble,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a meuble entity.
     *
     * @Route("/{id}", name="meuble_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Meuble $meuble)
    {
        $form = $this->createDeleteForm($meuble);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($meuble);
            $em->flush();
        }

        return $this->redirectToRoute('meuble_index');
    }

    /**
     * Creates a form to delete a meuble entity.
     *
     * @param Meuble $meuble The meuble entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Meuble $meuble)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('meuble_delete', array('id' => $meuble->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
