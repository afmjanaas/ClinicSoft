<?php

namespace Patient\PatientManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PatientManagementBundle:Default:index.html.twig', array('name' => $name));
    }
}
