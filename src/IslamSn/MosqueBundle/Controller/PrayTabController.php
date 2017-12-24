<?php

namespace IslamSn\MosqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Route;

class PrayTabController extends FOSRestController
{
	public function  postCreateAction(){

		return "hello";
	}
	public function getEntreprisesAllAction(){
		return "hello";
	}
}
