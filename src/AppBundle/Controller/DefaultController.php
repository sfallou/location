<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
	

    /**
     * @Route("/", name="start")
     */
    public function startAction(Request $request)
    {
        return $this->redirectToRoute('fos_user_security_login');
    }

    /**
     * @Route("/login_succes", name="after_login")
     */
    public function goAction(Request $request)
    {	
    	$user = $this->getUser();
        $userId = $user->getId();
        return $this->redirectToRoute('user_show',array('id'=>$userId));    
    }

     /**
     * @Route("/send_mail", name="send_mail")
     */
    public function mailAction(Request $request)
    {
        $message = (new \Swift_Message('Hello Email'))
        ->setFrom('coloc.evry91@gmail.com')
        ->setTo('serignefalloundiaye@gmail.com')
        ->setBody(
            $this->renderView(
                // app/Resources/views/Emails/registration.html.twig
                'default/start.html.twig',
                array('name' => 'Fallou')
            ),
            'text/html'
        );
        $this->get('mailer')->send($message);

        return $this->redirectToRoute('user_index');    
    }
}


