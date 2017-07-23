<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\UserRoom;
use AppBundle\Entity\Appartement;
use AppBundle\Entity\Residence;
use AppBundle\Entity\ChargeRoom;
use AppBundle\Entity\Charge;
use AppBundle\Entity\DocumentUserRoom;
use AppBundle\Entity\Document;
use AppBundle\Entity\RentUserRoom;
use AppBundle\Entity\FixRoom;
use AppBundle\Entity\Fix;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * User controller.
 *
 * @Route("user")
 */
class UserController extends Controller
{   


    /**
     * Compte user
     *
     * @Route("/mon_compte", name="mon_compte")
     * @Method("GET")
     */
     public function compteAction()
    {
        $user = $this->getUser();
        $userId = $user->getId();
        return $this->redirectToRoute('user_show',array('id'=>$userId));  
    }
    /**
     * Lists all user entities.
     *
     * @Route("/", name="user_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findByEnabled(1);

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     * @Route("/new", name="user_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        /*$user = new User();
        $form = $this->createForm('AppBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
        */
        return $this->redirectToRoute('fos_user_registration_register');
    }

    /**
     * Finds and displays a user entity.
     *
     * @Route("/{id}", name="user_show")
     * @Method("GET")
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        $em = $this->getDoctrine()->getManager();
        $charges = null;
        $charge_rooms = array();
        $docs = null;
        $doc_user_rooms = array();
        $rents = array();
        $quittances = array();
        $fixs = null;
        $fix_rooms = array();

        $user_room = $em->getRepository('AppBundle:UserRoom')->findOneBy(array('userId'=>$user->getId()));
        $room = $em->getRepository('AppBundle:Room')->findOneBy(array('id'=>$user_room->getRoomId()));
        $appart = $em->getRepository('AppBundle:Appartement')->findOneBy(array('id'=>$room->getIdAppart()));
        $residence = $em->getRepository('AppBundle:Residence')->findOneBy(array('id'=>$appart->getIdResidence()));
        $fixs = $em->getRepository('AppBundle:FixRoom')->findBy(array('roomId'=>$room->getId()));
        
        if ($fixs){
            foreach ($fixs as $fix ) {
                $type =  $em->getRepository('AppBundle:TypeFix')->findOneBy(array('id'=>$fix->getFixId()));
                $fix_rooms[$type->getName()] = $fix;
            }
        }

        $charges = $em->getRepository('AppBundle:ChargeRoom')->findBy(array('roomId'=>$room->getId()));
        
        if ($charges){
            foreach ($charges as $charge ) {
                $type =  $em->getRepository('AppBundle:TypeCharge')->findOneBy(array('id'=>$charge->getChargeId()));
                $charge_rooms[$type->getName()] = $charge;
            }
        }
        $docs = $em->getRepository('AppBundle:DocumentUserRoom')->findBy(array('userRoomId'=>$user_room->getId()));
        
        if ($docs){
            foreach ($docs as $doc ) {
                $type =  $em->getRepository('AppBundle:TypeDocument')->findOneBy(array('id'=>$doc->getDocumentId()));
                $doc_user_rooms[$type->getName()] = $doc;
            }
        }
        $quittances = $em->getRepository('AppBundle:RentUserRoom')->findBy(array('userRoomId'=>$user_room->getId()));
       //$rents = $em->getRepository('AppBundle:RentUserRoom')->findBy(array('userRoomId'=>$user_room->getId()));
        $query = $em->createQuery(
            'SELECT r
            FROM AppBundle:RentUserRoom r
            WHERE r.userRoomId = :id
            ORDER BY r.userRoomId DESC'
            )->setParameter('id',$user_room->getId() );

        $rents = $query->setMaxResults(12)->getResult();
        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'room' => $room,
            'user_room' => $user_room,
            'appart' => $appart,
            'residence' => $residence,
            'charges' =>$charge_rooms,
            'fixs' => $fix_rooms,
            'documents' => $doc_user_rooms,
            'rents' => $rents,
            'year' => date('Y'),
            'quittances' =>$quittances,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     * @Route("/{id}/edit", name="user_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, User $user)
    {
        $valideForm = $this->createForm('AppBundle\Form\UserValidateType', $user);
        $valideForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Desactivate a user entity.
     *
     * @Route("/{id}/delete_user", name="user_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction(Request $request, User $user)
    {   
        $user_room = $em->getRepository('AppBundle:UserRoom')->findOneBy(array('userId'=>$user->getId()));
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
