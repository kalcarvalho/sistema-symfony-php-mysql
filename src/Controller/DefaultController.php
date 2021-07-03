<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController {

    public function __construct() {

    }

    /**
     * @Route("/")
     */

    public function index() {
        return new Response("Meu Primeiro Controller");
    }

}