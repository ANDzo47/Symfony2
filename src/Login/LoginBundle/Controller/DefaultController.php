<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Login\LoginBundle\Entity\Users;
use Login\LoginBundle\Modals\Login;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository("LoginLoginBundle:Users");
        $session = $this->getRequest()->getSession();
        if ($request->getMethod() == 'POST') {

            $session->clear();
            $username = $request->get('username');
            $password = $request->get('password');
            $remember = $request->get('remember');


            $user = $repository->findOneBy(array("userName" => $username, 'password' => $password));
            if ($user) {
                if ($remember == 'remember-me') {
                    $login = new Login();
                    $login->setUsername($username);
                    $login->setPassword($password);
                    $session->set('login', $login);
                }
                return $this->render('LoginLoginBundle:Default:welcome.html.twig', array('name' => $user->getFirstName()));
            } else {
                return $this->render('LoginLoginBundle:Default:login.html.twig', array('name' => 'Login Error'));
            }
        } else {

            if ($session->has('login')) {
                $login = $session->get('login');
                $username = $login->getUsername();
                $password = $login->getPassword();
                $em = $this->getDoctrine()->getEntityManager();
                $user = $repository->findOneBy(array("userName" => $username, 'password' => $password));
                if ($user) {
                    return $this->render('LoginLoginBundle:Default:welcome.html.twig', array('name' => $user->getFirstName()));
                }
            }
            return $this->render('LoginLoginBundle:Default:login.html.twig');
        }
    }

    public function signupAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $username = $request->get('username');
            $firstname = $request->get('firstname');
            $password = $request->get('password');
            $user = new Users();
            $user->setFirstName($firstname);
            $user->setPassword($password);
            $user->setUserName($username);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        }
        return $this->render('LoginLoginBundle:Default:signup.html.twig');
    }

    public function logoutAction(Request $request) {
        $session = $this->getRequest()->getSession();
        $session->clear();
        return $this->render('LoginLoginBundle:Default:login.html.twig');
    }

}