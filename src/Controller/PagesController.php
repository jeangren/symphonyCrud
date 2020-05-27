<?php

// src/Controller/PagesController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class PagesController {

    /**
     * @Route("/products"/{productId}")
     */
    public function index(int $productId) {
        $response = new Response('<h1>Page du produit'.$productId.'</h1>');
        return $response;
    }
}

