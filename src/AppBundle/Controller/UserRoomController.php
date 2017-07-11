<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserRoom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Userroom controller.
 *
 * @Route("userroom")
 */
class UserRoomController extends Controller
{
    /**
     * Lists all userRoom entities.
     *
     * @Route("/", name="userroom_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $userRooms = $em->getRepository('AppBundle:UserRoom')->findAll();

        return $this->render('userroom/index.html.twig', array(
            'userRooms' => $userRooms,
        ));
    }

    /**
     * Creates a new userRoom entity.
     *
     * @Route("/new", name="userroom_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $userRoom = new Userroom();
        $form = $this->createForm('AppBundle\Form\UserRoomType', $userRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userRoom);
            $em->flush();

            return $this->redirectToRoute('userroom_show', array('id' => $userRoom->getId()));
        }

        return $this->render('userroom/new.html.twig', array(
            'userRoom' => $userRoom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a userRoom entity.
     *
     * @Route("/{id}", name="userroom_show")
     * @Method("GET")
     */
    public function showAction(UserRoom $userRoom)
    {
        $deleteForm = $this->createDeleteForm($userRoom);

        return $this->render('userroom/show.html.twig', array(
            'userRoom' => $userRoom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing userRoom entity.
     *
     * @Route("/{id}/edit", name="userroom_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, UserRoom $userRoom)
    {
        $deleteForm = $this->createDeleteForm($userRoom);
        $editForm = $this->createForm('AppBundle\Form\UserRoomType', $userRoom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('userroom_edit', array('id' => $userRoom->getId()));
        }

        return $this->render('userroom/edit.html.twig', array(
            'userRoom' => $userRoom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a userRoom entity.
     *
     * @Route("/{id}", name="userroom_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, UserRoom $userRoom)
    {
        $form = $this->createDeleteForm($userRoom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($userRoom);
            $em->flush();
        }

        return $this->redirectToRoute('userroom_index');
    }

    /**
     * Creates a form to delete a userRoom entity.
     *
     * @param UserRoom $userRoom The userRoom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(UserRoom $userRoom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('userroom_delete', array('id' => $userRoom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
