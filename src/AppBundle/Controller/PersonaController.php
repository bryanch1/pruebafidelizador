<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PersonaController extends Controller
{
    /**
     * @Route("/persona", name="persona")
     */
    public function Index(Request $request)
    {
        // replace this example code with whatever you need
        return $this->json("persona funciona");
    }
}