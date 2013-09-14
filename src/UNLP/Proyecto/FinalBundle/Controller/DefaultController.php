<?php

namespace UNLP\Proyecto\FinalBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Component\HttpFoundation\Session\Storage\Handler\PdoSessionHandler;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('FinalProyectoBundle:Default:index.html.twig', array('name' => $name));
    }

    public function homeAction()
    {

        return $this->render('FinalProyectoBundle:Default:home.html.twig');

    }

    public function startSessionAction(Request $request)
    {

        $session = new Session();
        $session->start();

        $postData = $request->request->get('contactForm');
        $name_value = $postData['username'];

        //var_dump($request);
        var_dump($postData);
        var_dump($name_value);

        return $this->render('FinalProyectoBundle:Default:startSession.html.twig');

    }

    public function closeSessionAction()
    {

        $session = new Session();
        $session->invalidate();

        return $this->render('FinalProyectoBundle:Default:home.html.twig');

    }

}
