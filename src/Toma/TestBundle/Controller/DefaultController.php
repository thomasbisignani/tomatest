<?php

namespace Toma\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TomaTestBundle:Default:index.html.twig');
    }
}
