<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//use Symfony\Component\Routing\Route;
//use Symfony\Component\Routing\RouteCollection; 


class PruebasController extends Controller {

    public function indexAction(Request $request, $nombre, $apellido) {

        $productos = array(
            array("producto" => "consola 1", "precio" => 2),
            array("producto" => "consola2", "precio" => 3),
            array("producto" => "consola3", "precio" => 4),
            array("producto" => "consola4", "precio" => 5),
            array("producto" => "consola5", "precio" => 6),
            array("producto" => "consola6", "precio" => 7)
        );
        $fruta = array("manzana" => "golden", "pera" => "rica");


        // replace this example code with whatever you need
        return $this->render('AppBundle:pruebas:index.html.twig', array('texto' => $nombre . " - " . $apellido,
                    'numero' => 15,
                    'productos' => $productos,
                    'fruta' => $fruta
                        )
        );
    }

    public function SaludaAction(Request $request) {
        echo "<H1>HOLA CARACOLA";
        echo "<br>" . $request;
        
        var_dump($request->query->get("hola"));
        var_dump($request->query->get("algo"));
        var_dump($request->get("hola-post"));
        
        die();
        
    }

}

