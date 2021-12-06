<?php
// src/Controller/HomeController.php

namespace App\Controller;

use DateTime;
use Doctrine\Common\Annotations\Annotation;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeZoneToStringTransformer;

/**
 * @Route ("/home")
 */

class HomeController extends AbstractController
{
    public function donnerHeure(): Response
    {
        return $this->render('deuxiemeCouche.html.twig', [
            'ajd' => date('d-m-Y'),
        ]);
    }
}