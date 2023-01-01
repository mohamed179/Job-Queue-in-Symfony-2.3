<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MyController extends Controller
{
    /**
     * @Route("/tryJMSJobQueue", name="_demo_contact")
     * @Template()
     */
    public function tryJMSJobQueue()
    {
        $myService = $this->get('acme.demo.my_service');
        $myService->addTheJob();
        return $this->render('AcmeDemoBundle:MyViews:index.html.twig');
    }
}
