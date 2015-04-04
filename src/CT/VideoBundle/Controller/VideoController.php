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
    $request = new \sylouuu\Curl\Get('http://eztvapi.re/show/'.$video->getVideoIdbm());
    $request->send();

    $video->dataJson = json_decode($request->getResponse());
    if (isset($video->dataJson->images->fanart)) {
      $video->Fanart = $video->dataJson->images->fanart;
    }
    $video->statutRequest = $request->getStatus();
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
      $em = $this->getDoctrine()->getManager();

      $user = $this->container->get('security.context')->getToken()->getUser();

      $video->setUser($user);

      $em->persist($video);

      $em->flush();

      $request->getSession()->getFlashBag()->add('notice','Video bien enregistré.');

      return $this->redirect($this->generateUrl('ct_video_watch',array('id' => $video->getId())));
    }

    return $this->render('CTVideoBundle:Video:upload.html.twig',array(
      'form' => $form->createView(),
    ));
  }

  public function galleryAction()
  {
    $security = $this->get('security.context');
    $token = $security->getToken();
    $user = $token->getUser();

    $listVideo = $user->getVideos();

    // $repository = $this->getDoctrine()->getEntityManager()->getRepository('CTVideoBundle:Video');
    // $listVideo = $repository->findBy(
    //   array('' => $user->getIdVideos()),
    //   array('id' => 'desc'),
    //   9,
    //   0
    // );
    foreach ($listVideo as $video) {
      $request = new \sylouuu\Curl\Get('http://eztvapi.re/show/'.$video->getVideoIdbm());
      $request->send();

      $video->dataJson = json_decode($request->getResponse());
      if (isset($video->dataJson->images->poster)) {
        $video->Poster = $video->dataJson->images->poster;
      }
      $video->statutRequest = $request->getStatus();

    }

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
  $request = new \sylouuu\Curl\Get('http://eztvapi.re/shows/1?keywords='.$query);
  $request->send();
  // if (is_array($listIdbm)) {
  //
  // }
  return new Response($request->getResponse());
}

public function testAction()
{
  return $this->render('CTVideoBundle:Video:test.html.twig');
}

}
