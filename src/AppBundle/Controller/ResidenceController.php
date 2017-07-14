<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\UserRoom;
use AppBundle\Entity\Appartement;
use AppBundle\Entity\Residence;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Residence controller.
 *
 * @Route("residence")
 */
class ResidenceController extends Controller
{
    /**
     * Lists all residence entities.
     *
     * @Route("/", name="residence_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $residences = $em->getRepository('AppBundle:Residence')->findAll();

        return $this->render('residence/index.html.twig', array(
            'residences' => $residences,
        ));
    }

    /**
     * Creates a new residence entity.
     *
     * @Route("/new", name="residence_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $residence = new Residence();
        $form = $this->createForm('AppBundle\Form\ResidenceType', $residence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($residence);
            $em->flush();

            return $this->redirectToRoute('residence_show', array('id' => $residence->getId()));
        }

        return $this->render('residence/new.html.twig', array(
            'residence' => $residence,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a residence entity.
     *
     * @Route("/{id}", name="residence_show")
     * @Method("GET")
     */
    public function showAction(Residence $residence)
    {
        $deleteForm = $this->createDeleteForm($residence);
        $em = $this->getDoctrine()->getManager();
        
        $apparts = $em->getRepository('AppBundle:Appartement')->findBy(array('id_residence'=>$residence->getId()));

        return $this->render('residence/show.html.twig', array(
            'residence' => $residence,
            'apparts' => $apparts,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing residence entity.
     *
     * @Route("/{id}/edit", name="residence_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Residence $residence)
    {
        $deleteForm = $this->createDeleteForm($residence);
        $editForm = $this->createForm('AppBundle\Form\ResidenceType', $residence);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('residence_edit', array('id' => $residence->getId()));
        }

        return $this->render('residence/edit.html.twig', array(
            'residence' => $residence,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a residence entity.
     *
     * @Route("/{id}", name="residence_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Residence $residence)
    {
        $form = $this->createDeleteForm($residence);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($residence);
            $em->flush();
        }

        return $this->redirectToRoute('residence_index');
    }

    /**
     * Creates a form to delete a residence entity.
     *
     * @param Residence $residence The residence entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Residence $residence)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('residence_delete', array('id' => $residence->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
