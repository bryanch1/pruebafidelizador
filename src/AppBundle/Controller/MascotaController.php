<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class MascotaController extends Controller
{
    /**
     * @Route("/mascota", name="mascota")
     */
    public function Index(Request $request)
    {
        return $this->json("mascota funciona");
    }
}