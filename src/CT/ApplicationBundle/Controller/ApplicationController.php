<?php

namespace CT\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ApplicationController extends Controller
{
    public function indexAction()
    {
      // On donne toutes les informations nécessaires à la vue
      return $this->render('layout.html.twig');
    }
}
