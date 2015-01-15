<?php

namespace AppBundle\Controller;

use Redacted\PasswordlessBundle\Security\Authentication\Token\RedactedUserToken;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\VarDumper\VarDumper;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        //$context = $this->get('security.context');
        //$token = new RedactedUserToken("kharrison@fortinet.com");
        //$context->setToken($token);

        VarDumper::dump($this->getUser());

        return $this->render('default/index.html.twig');
    }
}
