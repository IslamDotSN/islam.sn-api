<?php

namespace IslamSn\MosqueBundle\Controller;

use IslamSn\MosqueBundle\Entity\Mosque;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Route;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\Controller\Annotations\Head;
use FOS\RestBundle\Controller\Annotations\Patch;
use FOS\RestBundle\Controller\Annotations\Options;
use FOS\RestBundle\Controller\Annotations\Put;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;use Symfony\Component\HttpFoundation\Request;

/**
 * Mosque controller.
 *

 */
class MosqueController extends FOSRestController
{
    /**
     * Lists all mosque entities.
     *
     * @Get("/api/mosque/mosque")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mosques = $em->getRepository('IslamSnMosqueBundle:Mosque')->findAll();

        $view = $this->view($mosques);
        return $this->handleView($view);    

    }

    /**
     * Creates a new mosque entity.
     *
     * @Post("/api/mosque/mosque/create ")
     */
    public function newAction(Request $request)
    {
        $mosque = new Mosque();
        $form = $this->createForm('IslamSn\MosqueBundle\Form\MosqueType', $mosque);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $em->persist($mosque);
        $em->flush();

        $view = $this->view($mosque);
        return $this->handleView($view);   
    }

    /**
     * Finds and displays a mosque entity.
     *
     * @Get("/api/mosque/mosque/{id}/show")
     */
    public function showAction(Mosque $mosque)
    {


    $view = $this->view($mosque);
    return $this->handleView($view);   
    }

    /**
     * Displays a form to edit an existing mosque entity.
     *
    * @Post("/api/mosque/mosque/{id}/edit ")
    * @Put("/api/mosque/mosque/{id}/edit ")
     */
    public function editAction(Request $request, Mosque $mosque)
    {
        $editForm = $this->createForm('IslamSn\MosqueBundle\Form\MosqueType', $mosque);
        $editForm->handleRequest($request);
        $this->getDoctrine()->getManager()->flush();


        $view = $this->view($mosque);
        return $this->handleView($view);  
    }

    /**
     * Deletes a mosque entity.
     *
     * @Delete("/api/mosque/mosque/{id}/delete ")
     */
    public function deleteAction(Request $request, Mosque $mosque)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($mosque);
        $em->flush();

        $view = $this->view($mosque);
        return $this->handleView($view);  
    }

}
