<?php


namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



/**
 * @Route("/login", name="logueo")
 */
class loginController extends Controller
{
    
    
    function loginAction(Request $Request, String $user)
    {
        
        \dump(  $Request->query->get('mierda') ) ; 
        \dump($Request);
        
        
        \AppKernel::
        
          die();
          
    }
    
}

