<?php

namespace Demo\PlaylistBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlayListController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlayListBundle:PlayList:index.html.php');
    }

    public function editAction($id)
    {
        throw $this->createNotFoundException('Rien trouvé');

    }

    public function addAction()
    {
        return $this->render('PlayListBundle:PlayList:add.html.php');
    }

    public function deleteAction($id)
    {
        return $this->render('PlayListBundle:PlayList:delete.html.php', array('id' => $id));
    }

}
