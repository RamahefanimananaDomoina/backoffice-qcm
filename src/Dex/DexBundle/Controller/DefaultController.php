<?php

namespace Dex\DexBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DexBundle:Default:index.html.twig', array('name' => $name));
    }
}
