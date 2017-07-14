<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use AppBundle\Entity\Room;
use AppBundle\Entity\UserRoom;
use AppBundle\Entity\Appartement;
use AppBundle\Entity\Residence;
use AppBundle\Entity\MeubleAppartement;
use AppBundle\Entity\Meuble;
use AppBundle\Entity\FixAppartement;
use AppBundle\Entity\Fix;
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
        $em = $this->getDoctrine()->getManager();
        
        $residences = $em->getRepository('AppBundle:Residence')->findAll();

        $appartement = new Appartement();
        $form = $this->createForm('AppBundle\Form\AppartementType', $appartement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($appartement);
            $em->flush();

             $request->getSession()
                ->getFlashBag()
                ->add('success', 'appartement a été bien ajoutée!');

            return $this->redirectToRoute('appartement_show', array('id' => $appartement->getId()));
        }

        return $this->render('appartement/new.html.twig', array(
            'appartement' => $appartement,
            'residences' =>$residences,
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

        $users = array();
        $rooms = null;
        $meubles = null;
        $meubles_apparts = array();
        $fixs = null;
        $fix_apparts = array();
        $em = $this->getDoctrine()->getManager();
        
        $rooms = $em->getRepository('AppBundle:Room')->findBy(array('id'=>$appartement->getId()));
        if ($rooms){
            foreach ($rooms as $room ) {
                $user_room = $em->getRepository('AppBundle:UserRoom')->findOneBy(array('roomId'=>$room->getId()));
                if ($user_room){
                    $user = $em->getRepository('AppBundle:User')->findOneBy(array('id'=>$user_room->getUserId()));
                    $users[] = $user;
                }
            }
        }
        $residence = $em->getRepository('AppBundle:Residence')->findOneBy(array('id'=>$appartement->getIdResidence()));
       
        $meubles = $em->getRepository('AppBundle:MeubleAppartement')->findBy(array('appartId'=>$appartement->getId()));
       
        if ($meubles){
            foreach ($meubles as $meuble ) {
                $meubles_apparts[] = $em->getRepository('AppBundle:Meuble')->findOneBy(array('id'=>$meuble->getMeubleId()));
            }
        }

        $fixs = $em->getRepository('AppBundle:FixAppartement')->findBy(array('appartId'=>$appartement->getId()));
        
        if ($fixs){
            foreach ($fixs as $fix ) {
                $type =  $em->getRepository('AppBundle:TypeFix')->findOneBy(array('id'=>$fix->getFixId()));
                $fix_apparts[$type->getName()] = $fix;
            }
        }
       /*foreach ($apparts as $appart){
            $rooms = $em->getRepository('AppBundle:Room')->findBy(array('id_appart'=>$appart->getId()));
            $resultats[$appart->getAdresse()] = $rooms;
        }
        */

        return $this->render('appartement/show.html.twig', array(
            'appartement' => $appartement,
            'residence' => $residence,
            'rooms' => $rooms,
            'users' => $users,
            'meubles' => $meubles_apparts,
            'fixs' => $fix_apparts,
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
