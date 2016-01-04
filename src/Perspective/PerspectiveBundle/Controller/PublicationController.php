<?php

namespace Perspective\PerspectiveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicationController extends Controller
{
    public function indexAction($titre)
    {
        $em = $this->getDoctrine()->getManager();
        $detailspublications = $em ->getRepository('PerspectiveBundle:Publication')->findBy(array('titlePublication'=>$titre));

        return $this->render('PerspectiveBundle:Publication:publication.html.twig',array('detailspublications'=>$detailspublications));
    }
}
