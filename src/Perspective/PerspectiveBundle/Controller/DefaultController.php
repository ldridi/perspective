<?php

namespace Perspective\PerspectiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this ->getDoctrine()->getManager();
        $findpublications = $em->getRepository('PerspectiveBundle:Publication')->findAll();
        $publications  = $this->get('knp_paginator')->paginate($findpublications,$this->get('request')->query->get('page', 1),20);
        return $this->render('PerspectiveBundle:Default:index.html.twig',array('publications'=>$publications));
    }
}
