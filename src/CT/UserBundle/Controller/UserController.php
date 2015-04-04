<?php

namespace CT\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use CT\UserBundle\Entity\User;


class UserController extends Controller
{
  public function addFriendAction($id)
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    //$id_user = $request->query->get('id_user');

    $userManager = $this->get('fos_user.user_manager');

    $add_user = $userManager->findUserBy(array('id' => $id ));

    $user->addMyFriend($add_user);

    $userManager->updateUser($user);

    return $this->render('CTUserBundle:Friendship:FriendList.html.twig',array('friends' => $user->getMyFriends() ));

  }

  public function deleteFriendAction($id)
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    $userManager = $this->get('fos_user.user_manager');

    $delete_user = $userManager->findUserBy(array('id' => $id ));

    $user->removeMyFriend($delete_user);

    $userManager->updateUser($user);

    return $this->render('CTUserBundle:Friendship:FriendList.html.twig',array('friends' => $user->getMyFriends() ));

  }

  public function showMyFriendsAction()
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    return $this->render('CTUserBundle:Friendship:FriendList.html.twig',array('friends' => $user->getMyFriends() ));
  }

  /*
  * On cherche une correspondance entre le token et un username [GET]
  */

  public function searchAction(Request $request)
  {
    $search = $request->query->get('search');

    $query = $this->getDoctrine()->getEntityManager()
                        ->createQuery("
	            SELECT p FROM CTUserBundle:User p
	            WHERE p.username LIKE :search "
                        );
    $query->setParameter('search', '%'.$search.'%');
    $result=$query->getResult();

    return $this->render('CTUserBundle:Friendship:FriendList.html.twig',array('friends' => $result ));
  }

  public function deleteUserAction($id)
  {
    $userManager = $this->get('fos_user.user_manager');
    $user = $userManager->findUserBy(array('id' => $id ));
    $userManager->deleteUser($user);

    return $this->redirect('ct_application_homepage');

  }

}
