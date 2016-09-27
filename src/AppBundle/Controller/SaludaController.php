<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Symfony\Component\Routing\Route;
//use Symfony\Component\Routing\RouteCollection; 


class SaludaController extends Controller
{

  
    public function SaludaAction(Request $request)
    {
        
        
        // replace this example code with whatever you need
        return $this->render('AppBundle:pruebas:index.html.twig',
                array('texto' => "HOLA CARACOLA", 
                      'numero' =>  15 ));         
                   
    }

     
}