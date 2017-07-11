<?php

namespace AppBundle\Controller;

use AppBundle\Entity\UserRoom;
use AppBundle\Form\UserRoomType;
use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\Appartement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;



class AssociationController extends Controller
{
   
    /**
     * Lists all unvalidated users.
     * @Route("/validation", name="validation_user")
     * @Method("GET")
     */
    public function validationAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('AppBundle:User')->findByEnabled(0);

        return $this->render('association/validation.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Displays a form to validate an existing user entity.
     *
     * @Route("/{id}/validated", name="user_validated")
     * @Method({"GET", "POST"})
     */
    public function validatedAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $apparts = $em->getRepository('AppBundle:Appartement')->findAll();

        $resultats = array();

        foreach ($apparts as $appart){
            $rooms = $em->getRepository('AppBundle:Room')->findBy(array('id_appart'=>$appart->getId()));
            $resultats[$appart->getAdresse()] = $rooms;
        }

        $userRoom = new Userroom();
        $form = $this->createForm('AppBundle\Form\UserRoomType', $userRoom);
        $form->get('userId')->setData($id);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // On active le compte du user
            $user = $em->getRepository(User::class)->find($id);
            $user->setEnabled(true);
            $em->persist($userRoom);
            $em->flush();
            return $this->redirectToRoute('validation_user');
        }

        
        return $this->render('association/validationForm.html.twig', array(
            'apparts_rooms' =>$resultats,
            'form' => $form->createView()
        ));
    }
}

