<?php

namespace IslamSn\PublicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnPublicationBundle:Default:index.html.twig');
    }
}
