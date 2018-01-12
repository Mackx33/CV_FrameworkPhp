<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CVController extends Controller
{
    /**
     * @Route("/cv/{name}", name="cvpage")
     */
    public function cv($name)
    {
        return $this->render('AppBundle:CV:CVhome.html.twig', ['name'=>$name]);
    }
}
