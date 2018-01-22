<?php

namespace IslamSn\GeneratorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnGeneratorBundle:Default:index.html.twig');
    }
}
