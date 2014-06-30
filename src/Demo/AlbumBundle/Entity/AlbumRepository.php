<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Ahamada
 * Date: 29/06/14
 * Time: 09:35
 */

namespace Demo\AlbumBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Config\Definition\Exception\Exception;

class AlbumRepository extends EntityRepository{

    public function findAllOrderedByTitre() {
        return $this->getEntityManager()->createQuery(
            'SELECT a FROM AlbumBundle:Album a ORDER BY a.titre ASC'
        )->getResult();
    }

    public function addAlbum($album) {
        $em = $this->getEntityManager();
        if($album) {
            $em->persist($album);
            $em->flush();
        }
        else {
            throw new Exception('MySQL Error');
        }
    }

    public function deleteAlbum($id) {
        $em = $this->getEntityManager();
        $album = $em->find('AlbumBundle:Album', $id);
        if($album) {
            $em->remove($album);
            $em->flush();
        }
        else {
            throw new Exception ("L'album n'existe pas id=".$id);
        }
    }

    public function editAlbum (Album $album) {
        $em = $this->getEntityManager();
        $album_o = $em->find('AlbumBundle:Album', $album->getId());
        if ($album_o){
            $album_o = clone $album;
            $em->flush();
        }
        else {
            throw new Exception('Not Found Error');
        }
    }
} 