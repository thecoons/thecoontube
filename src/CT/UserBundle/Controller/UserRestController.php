<?php

namespace CT\UserBundle\Controller;
use CT\UserBundle\Controller\UserController;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class UserRestController extends Controller
{
  /**
  * @param type $username
  * @View(serializerGroups={"Default","Details"})
  */
  public function getUserAction($username){
    $user = $this->getDoctrine()->getRepository('CTUserBundle:User')->findOneByUsername($username);
    if(!is_object($user)){
      throw $this->createNotFoundException();
    }
    return $user;
  }

  /**
  *@View(serializerGroups={"Default","Me","Details"})
  */
  public function getMeAction()
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();
    if($user !== NULL )
    {
      return $this->getUser();
    }
    return;
  }
}
