<?php

namespace CT\ApplicationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use CT\ApplicationBundle\Entity\Community;
use CT\ApplicationBundle\Entity\Post;
use CT\ApplicationBundle\Form\CommunityType;
use CT\ApplicationBundle\Form\PostType;
use CT\ApplicationBundle\Entity\Comment;
use CT\ApplicationBundle\Form\CommentType;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Validator\Constraints\DateTime;

class ApplicationController extends Controller
{
  public function indexAction()
  {
    // On donne toutes les informations nécessaires à la vue
    return $this->render('layout.html.twig');
  }

  public function indexCommunityAction()
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

      $mycommunities = $user->getCommunities() ;//$user->getCommunities();

    $followCommunity = $user->getFollowCommunities();

    return $this->render('CTApplicationBundle:Community:indexCommunity.html.twig',array('mycommunities' => $mycommunities,'followcommunity' => $followCommunity));
  }

  public function createCommunityAction(Request $request)
  {
    $community = new Community();
    $formBuilder = $this->createFormBuilder($community);
    $form = $this->get('form.factory')->create(new CommunityType,$community);

    if ($form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $user = $this->container->get('security.context')->getToken()->getUser();

      $community->setAdmin($user);
      $community->setPrivate(0);

      $user->addCommunity($community);

      $community->addSubscriber($user);

      $em->persist($community);

      $em->flush();

      return $this->redirect($this->generateUrl('ct_application_mycommunities'));

    }

    return $this->render('CTApplicationBundle:Community:createCommunity.html.twig',array('form' => $form->createView()));
  }


  public function createPostAction(Request $request,$id)
  {
    $post = new Post();
    $formBuilder = $this->createFormBuilder($post);
    $form = $this->get('form.factory')->create(new PostType,$post);
    if ($form->handleRequest($request)->isValid()) {

      $em = $this->getDoctrine()->getManager();

      // On récupère l'annonce $id
      $community = $em->getRepository('CTApplicationBundle:Community')->find($id);

      $community->addPost($post);

      $post->setDate(new \DateTime());

      $post->setCommunity($community);



      $em->persist($post);

      $em->flush();

      return $this->redirect($this->generateUrl('ct_application_show_community',array('id' => $id)));
      //return new Response("Hello World !");

    }

    return $this->render('CTApplicationBundle:Community:createPost.html.twig',array('form' => $form->createView() ));
  }

  public function createCommentAction(Request $request,$id)
  {
    $comment = new Comment();
    $formBuilder = $this->createFormBuilder($comment);
    $form = $this->get('form.factory')->create(new CommentType,$comment);

    if ($form->handleRequest($request)->isValid()) {

      $em = $this->getDoctrine()->getManager();

      // On récupère l'annonce $id
      $post = $em->getRepository('CTApplicationBundle:Post')->find($id);

      $security = $this->get('security.context');
      $token = $security->getToken();
      $user = $token->getUser();

      $post->addComment($comment);

      $comment->setPost($post);

      $comment->setDate(new \DateTime());

      $comment->setUser($user);



      $em->persist($post);

      $em->flush();

      return $this->redirect($this->generateUrl('ct_application_show_community',array('id' => $post->getCommunity()->getId())));
      //return new Response("Hello World !");

    }

    return $this->render('CTApplicationBundle:Community:createComment.html.twig',array('form' => $form->createView()));
  }

  public function subscribeCommunityAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $community = $em->getRepository('CTApplicationBundle:Community')->find($id);

    if(null === $community){
      throw new NotFoundHttpException("Community wasn't find");
    }
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    $community->addSubscriber($user);

    $em->flush();

    return $this->redirect($this->generateUrl('ct_application_mycommunities'));


  }

  public function sendInvitAction($idCommunity,$idUser)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $community = $em->getRepository('CTApplicationBundle:Community')->find($idCommunity);

    if(null === $community){
      throw new NotFoundHttpException("Community wasn't find");
    }

    $user = $em->getRepository('CTUserBundle:User')->find($idUser);
    if(null === $user){
      throw new NotFoundHttpException("User wasn't find");
    }
    $community->addInvitUser($user);

    $em->flush();

    return $this->redirect($this->generateUrl('ct_application_show_community',array('id'=>$idCommunity)));

  }

  public function acceptInvitAction($idCommunity)
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $community = $em->getRepository('CTApplicationBundle:Community')->find($idCommunity);

    $community->removeInvitUser($user);
    $community->addSubscriber($user);

    $userManager = $this->get('fos_user.user_manager');
    $userManager->updateUser($user);


    return $this->redirect($this->generateUrl('ct_application_show_community',array('id'=>$idCommunity)));

  }

  public function declineInvitAction($idCommunity)
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $community = $em->getRepository('CTApplicationBundle:Community')->find($idCommunity);

    $community->removeInvitUser($user);


    $userManager = $this->get('fos_user.user_manager');
    $userManager->updateUser($user);


    return $this->redirect($this->generateUrl('ct_application_homepage'));
  }

  public function leaveCommunityAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $community = $em->getRepository('CTApplicationBundle:Community')->find($id);

    if(null === $community){
      throw new NotFoundHttpException("Community wasn't find");
    }
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    $community->removeSubscriber($user);

    $em->flush();

    return $this->redirect($this->generateUrl('ct_application_mycommunities'));
  }

  public function privateCommunityAction($id)
  {
    $em = $this->getDoctrine()->getManager();

    // On récupère l'annonce $id
    $community = $em->getRepository('CTApplicationBundle:Community')->find($id);

    if($community->getPrivate())
    {
      $community->setPrivate(0);
    }
    else{
      $community->setPrivate(1);
    }

    $em->flush();
    return $this->redirect($this->generateUrl('ct_application_mycommunities'));

  }

  public function invitCommunityAction()
  {
    return $this->render('CTApplicationBundle:Community:invitCommunity.html.twig');
  }

  public function searchCommunityAction(Request $request)
  {
    $search = $request->query->get('search');

    $query = $this->getDoctrine()->getEntityManager()
    ->createQuery("
    SELECT p FROM CTApplicationBundle:Community p
    WHERE p.title LIKE :search "
  );
  $query->setParameter('search', '%'.$search.'%');
  $result=$query->getResult();

  return $this->render('CTApplicationBundle:Community:searchCommunity.html.twig',array('communities' => $result ));
}

public function deleteCommunityAction($id)
{

  $em = $this->getDoctrine()->getManager();

  // On récupère l'annonce $id
  $community = $em->getRepository('CTApplicationBundle:Community')->find($id);

  $em->remove($community);
  $em->flush();

  return $this->redirect($this->generateUrl('ct_application_mycommunities'));

}

public function deleteCommentAction($id)
{

  $em = $this->getDoctrine()->getManager();

  // On récupère l'annonce $id
  $comment = $em->getRepository('CTApplicationBundle:Comment')->find($id);

  $em->remove($comment);
  $em->flush();

  return $this->redirect($this->generateUrl('ct_application_mycommunities'));

}

public function showCommunityAction(Request $request,$id)
{
  $em = $this->getDoctrine()->getManager();

  // On récupère l'annonce $id
  $community = $em->getRepository('CTApplicationBundle:Community')->find($id);

  $communityPost = $community->getPosts();

  foreach ( $communityPost as $postItem) {
    $apiVideo = json_decode($postItem->getVideo()->getDataJson());
    if (isset($apiVideo)) {
      $postItem->api = $apiVideo;
    }

  }

  $post = new Post();
  $formBuilder = $this->createFormBuilder($post);
  $form = $this->get('form.factory')->create(new PostType,$post);
  if ($form->handleRequest($request)->isValid()) {


    $community->addPost($post);

    $post->setDate(new \DateTime());

    $post->setCommunity($community);



    $em->persist($post);

    $em->flush();

    return $this->redirect($this->generateUrl('ct_application_show_community',array('id' => $id)));
    //return new Response("Hello World !");

  }

  return $this->render('CTApplicationBundle:Community:showCommunity.html.twig',array('community' => $community,'communityPost' => $communityPost,'formPost' => $form->createView() ));

}
}
