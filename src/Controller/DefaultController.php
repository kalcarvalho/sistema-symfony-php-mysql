<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {

    public function __construct() {

    }

    /**
     * @Route("/", name="app_home")
     */

    public function index() {
        return $this->render('login.html.twig');
    }

}