<?php

namespace IslamSn\MosqueBundle\Controller;

use IslamSn\MosqueBundle\Entity\PrayTab;
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
 * Praytab controller.
 *

 */
class PrayTabController extends FOSRestController
{
    /**
     * Lists all prayTab entities.
     *
     * @Get("/api/mosque/praytab")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $prayTabs = $em->getRepository('IslamSnMosqueBundle:PrayTab')->findAll();

        $view = $this->view($prayTabs);
        return $this->handleView($view);    

    }

    /**
     * Creates a new prayTab entity.
     *
     * @Post("/api/mosque/praytab/create ")
     */
    public function newAction(Request $request)
    {
        $prayTab = new Praytab();
        $form = $this->createForm('IslamSn\MosqueBundle\Form\PrayTabType', $prayTab);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $em->persist($prayTab);
        $em->flush();

        $view = $this->view($prayTab);
        return $this->handleView($view);   
    }

    /**
     * Finds and displays a prayTab entity.
     *
     * @Get("/api/mosque/praytab/{id}/show")
     */
    public function showAction(PrayTab $prayTab)
    {


    $view = $this->view($prayTab);
    return $this->handleView($view);   
    }

    /**
     * Displays a form to edit an existing prayTab entity.
     *
    * @Post("/api/mosque/praytab/{id}/edit ")
    * @Put("/api/mosque/praytab/{id}/edit ")
     */
    public function editAction(Request $request, PrayTab $prayTab)
    {
        $editForm = $this->createForm('IslamSn\MosqueBundle\Form\PrayTabType', $prayTab);
        $editForm->handleRequest($request);
        $this->getDoctrine()->getManager()->flush();


        $view = $this->view($prayTab);
        return $this->handleView($view);  
    }

    /**
     * Deletes a prayTab entity.
     *
     * @Delete("/api/mosque/praytab/{id}/delete ")
     */
    public function deleteAction(Request $request, PrayTab $prayTab)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($prayTab);
        $em->flush();

        $view = $this->view($prayTab);
        return $this->handleView($view);  
    }

}
