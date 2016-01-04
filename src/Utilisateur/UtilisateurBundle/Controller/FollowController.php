<?php

namespace Utilisateur\UtilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Utilisateur\UtilisateurBundle\Entity\Follow;

class FollowController extends Controller
{
    public function FollowAction($id)
    {
        $entity = new Follow();
        $em = $this->getDoctrine()->getManager();
        $userId = $this->get('security.token_storage')->getToken()->getUser();
        $user = $em->getRepository('UtilisateurBundle:Utilisateur')->find($id);
        $entity->setFollowed($user);
        $entity->setFollowBy($userId);
        $entity->setDateFollow(new \DateTime('now'));
        $em->persist($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('profile',array('profile'=>$user->getUsername())));
    }
}
