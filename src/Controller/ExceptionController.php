<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class ExceptionController extends Controller
{
    public function show()
    {
       

        return $this->render('bundles/TwigBundle/Exception/error403.html.twig');
    }

  

}
