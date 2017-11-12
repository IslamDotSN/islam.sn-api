<?php

namespace IslamSn\InvocationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnInvocationBundle:Default:index.html.twig');
    }
}
