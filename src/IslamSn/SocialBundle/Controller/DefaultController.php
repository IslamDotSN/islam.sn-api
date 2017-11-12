<?php

namespace IslamSn\SocialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IslamSnSocialBundle:Default:index.html.twig');
    }
}
