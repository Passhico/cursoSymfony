<?php

namespace AppBundle\Twig;


class HelperVistas extends \Twig_Extension
{
    
    public function getFunctions() 
    {
        return array ('generateTable' => new \Twig_Function_Method($this, 'generateTable'));    
    }
    
    public function generateTable($resultSet) {

        $longitud = count($resultSet) - 1;
        

        $table = "<table class='table' border=1> ";

        for ($i = 0; $i < $longitud; $i++) 
        {
            $valores = array_values($resultSet[$i]);
            $table .= "<tr>";

            for ($j = 0; $j < 2; $j++) 
            {
                $table .= "<td> ";
                $table .= $valores[$j];
                $table .="</td>";
            }
        }
        
  
        return $table;
    }

    public function getName() 
    {
        return "app_bundle";
    }

}