<?php

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UtilisateurController extends Controller
{
    public function indexAction($profile)
    {
        $em = $this->getDoctrine()->getManager();
        $profiles = $em->getRepository('UtilisateurBundle:Utilisateur')->findBy(array('username'=>$profile));
        if(!$profiles){
            return $this->render('PerspectiveBundle:Pages:404.html.twig');
        }
        $nb = $em->getRepository('UtilisateurBundle:Follow')->byNb($profile);
        $findpublications = $em->getRepository('PerspectiveBundle:Publication')->byUser($profile);
        $publications  = $this->get('knp_paginator')->paginate($findpublications,$this->get('request')->query->get('page', 1),10);
        return $this->render('UtilisateurBundle:profile:profile.html.twig',array('nb'=>$nb,'profiles'=>$profiles,'publications'=>$publications));
    }
}
