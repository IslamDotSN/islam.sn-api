<?php

namespace IslamSn\MosqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnMosqueBundle:Default:index.html.twig');
    }
}
