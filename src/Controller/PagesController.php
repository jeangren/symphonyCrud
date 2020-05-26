<?php

// src/Controller/PagesController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PagesController {

    public function about(){
        return new Response('Hello World!');
    }
}