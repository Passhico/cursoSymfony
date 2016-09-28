<?php

namespace AppBundle\Twig;


class HelperVistas extends \Twig_Extension
{
    
    public function getFunctions() 
    {
        return array ('generateTable' => new \Twig_Function_Method($this, 'generateTable'));    
    }
    
    public function generateTable($num_colums, $num_rows)
    {
        $table = "<table class='table'> ";
        
        for ($i = 0 ; $i< $num_colums ; $i++)
        {    
            $table .= "<tr>";
            
            for($j=0; $j< $num_rows; $j++)
            {
                $table .= "<td> COL </td>";
            }
        }    
        return $table;
    }
    
    public function getName() 
    {
        return "app_bundle";
    }

}