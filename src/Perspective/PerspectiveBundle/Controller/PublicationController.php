<?php

namespace Perspective\PerspectiveBundle\Controller;

use Perspective\PerspectiveBundle\Entity\ConsultationPub;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Validator\Constraints\DateTime;

class PublicationController extends Controller
{
    public function indexAction($id)
    {
        $consultation = new ConsultationPub();
        $em = $this->getDoctrine()->getManager();
        $detailspublications = $em ->getRepository('PerspectiveBundle:Publication')->findById($id);
        $pub = $em->getRepository('PerspectiveBundle:Publication')->find($id);
        $nbrConsulatation = $em->getRepository('PerspectiveBundle:ConsultationPub')->byNbConsultation($id);
        $consultation->setDateConsultation(new \DateTime());
        $consultation->setPublication($pub);
        $em->persist($consultation);
        $em->flush();
        return $this->render('PerspectiveBundle:Publication:publication.html.twig',array('nbrConsultation'=>$nbrConsulatation,'detailspublications'=>$detailspublications));
    }
}
