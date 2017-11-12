<?php

namespace IslamSn\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnCoreBundle:Default:index.html.twig');
    }
}
