<?php

namespace Test\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TestProjectsBundle:Default:index.html.twig');
    }
}
