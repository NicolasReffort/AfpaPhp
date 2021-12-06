<?php
// src/Controller/PrisonnierController.php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Prisonnier;

class PrisonnierController{    
   
   public function direBonjour() : Response 
   {
       
    $nomOk = Prisonnier::$nom;
    print $nomOk;
    
    return new Response(
        '<html><body> Bonjour je suis : '.$nomOk.'</body></html>'
    );    
   }

}

?>