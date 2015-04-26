<?php

namespace CT\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use CT\VideoBundle\Entity\Video;
use CT\VideoBundle\Form\VideoType;


class VideoController extends Controller
{
  public function watchAction($id)
  {
    $video = $this->getDoctrine()->getRepository('CTVideoBundle:Video')->find($id);

    $video->api = json_decode($video->getDataJson());
    $video->api->cast = json_decode($video->getCastJson());
    return $this->render('CTVideoBundle:Video:watch.html.twig',array('video'=> $video ));

  }

  public function deleteAction($id)//vérification appartenance Video
  {


    $em = $this->getDoctrine()->getManager();
    $repVideo= $em->getRepository('CTVideoBundle:Video');

    $video = $repVideo->find($id);

    $em->remove($video);
    $em->flush();

    return $this->redirect($this->generateUrl('ct_video_gallery'));
  }

  public function uploadAction(Request $request)
  {
    $video = new Video();
    $formBuilder = $this->createFormBuilder($video);
    $form = $this->get('form.factory')->create(new VideoType,$video);

    if ($form->handleRequest($request)->isValid()) {
      $request = new \sylouuu\Curl\Get('http://api.themoviedb.org/3/movie/'.$video->getVideoIdbm().'?api_key=93e95012f2025c18244e13029d1983e1');
      $request->send();

      $video->setDataJson($request->getResponse());

      $requestCast = new \sylouuu\Curl\Get('http://api.themoviedb.org/3/movie/'.$video->getVideoIdbm().'/credits?api_key=93e95012f2025c18244e13029d1983e1');
      $requestCast->send();

      $video->setCastJson($requestCast->getResponse());

      $em = $this->getDoctrine()->getManager();

      $user = $this->container->get('security.context')->getToken()->getUser();

      $video->setUser($user);

      $em->persist($video);

      $em->flush();

      return $this->redirect($this->generateUrl('ct_video_watch',array('id' => $video->getId())));
    }

    return $this->render('CTVideoBundle:Video:upload.html.twig',array(
      'form' => $form->createView(),
    ));
  }

  public function galleryAction($id)
  {
      if($id)
      {

      $userManager = $this->get('fos_user.user_manager');
      $user = $userManager->findUserBy(array('id' => $id));
      }
      else
      {
        $security = $this->get('security.context');
        $token = $security->getToken();
        $user = $token->getUser();
      }


    $listVideo = $user->getVideos();


    foreach ($listVideo as $video) {

      $ApiVideo = json_decode($video->getDataJson());

      if (isset($ApiVideo)) {
        $video->api = $ApiVideo;
      }


    }
    //return new Response(var_dump($user));
    return $this->render('CTVideoBundle:Video:gallery.html.twig',array('video_list' => $listVideo));
  }

  public function styleAction($id)
{
  $video = $this->getDoctrine()->getRepository('CTVideoBundle:Video')->find($id);
  $request = new \sylouuu\Curl\Get('http://eztvapi.re/show/'.$video->getVideoIdbm());
  $request->send();

  $video->dataJson = json_decode($request->getResponse());
  if (isset($video->dataJson->images->fanart)) {
    $video->Fanart = $video->dataJson->images->fanart;
  }
    return new Response(
        'CTVideoBundle::flowplayer.css.twig',
        ['video' => $video],
        ['Content-Type' => 'text/css']
    );
}



public function idbm_searchAction($query)
{
  $request = new \sylouuu\Curl\Get('http://private-032f1-themoviedb.apiary-proxy.com/3/search/movie?api_key=93e95012f2025c18244e13029d1983e1&query='.urlencode($query).'&page=1');
  $request->send();
  // if (is_array($listIdbm)) {
  //
  // }
  return new Response($request->getResponse());
}

public function actorAction($id)
{
  $request = new \sylouuu\Curl\Get('http://api.themoviedb.org/3/person/'.$id.'?api_key=93e95012f2025c18244e13029d1983e1');
  $request->send();

  $actor = json_decode($request->getResponse());

  $requestCast = new \sylouuu\Curl\Get('http://api.themoviedb.org/3/person/'.$id.'/movie_credits?api_key=93e95012f2025c18244e13029d1983e1');
  $requestCast->send();

  $actor->cast = json_decode($requestCast->getResponse());


  return $this->render('CTVideoBundle:Video:actor.html.twig',array('actor' => $actor));
}

public function testAction()
{
  return $this->render('CTVideoBundle:Video:test.html.twig');
}

}
