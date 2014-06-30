<?php

namespace Demo\AlbumBundle\Controller;

use Demo\AlbumBundle\Entity\Album;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AlbumController extends Controller
{

    public function indexAction()
    {
        $albums = $this->getDoctrine()->getRepository('AlbumBundle:Album')->findAll();
        return $this->render('AlbumBundle:Album:index.html.twig', array('albums'=>$albums));
        //return $this->redirect('http://localhost/symfony/web/app_dev.php/');
    }

    public function addAction()
    {
        $album = new Album();
        $em = $this->getDoctrine()->getManager();
        $albumRep = $this->getDoctrine()->getManager()
            ->getRepository('AlbumBundle:Album');

        $album->setArtiste('Chebli');
        $album->setTitre('Promesses');
        $albumRep->addAlbum($album);

        return new Response('L album '. $album->getId() .' est inséré');
    }

}
