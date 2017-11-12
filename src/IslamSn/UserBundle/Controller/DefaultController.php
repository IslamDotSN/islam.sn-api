<?php

namespace IslamSn\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnUserBundle:Default:index.html.twig');
    }
}
