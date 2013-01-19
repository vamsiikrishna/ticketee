<?php

namespace BlueEdge\TicketeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BlueEdgeTicketeeBundle:Default:index.html.twig', array('name' => $name));
    }
}
