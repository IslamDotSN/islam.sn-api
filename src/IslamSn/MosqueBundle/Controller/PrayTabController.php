<?php

namespace IslamSn\MosqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Route;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;

class PrayTabController extends FOSRestController
{
	/**
	 * POST Route annotation.
	 * @Post("/praytab/new")
	 */
	public function  postPraytabAction(){
		$repository = $this->getRepository();
		return "hello";
	}

	private function getRepository(){

		$em = $this->getDoctrine()->getManager();
		return $em->getRepository('IslamSnMosqueBundle:PrayTab');
	}

	public function getEntreprisesAllAction(){
		return "hello";
	}
}
