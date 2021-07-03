<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

    public function __construct() {

    }

    /**
     * @Route("/")
     */

    public function index() {
        return $this->render('login.html.twig');
        return new Response("Meu Primeiro Controller");
    }

}