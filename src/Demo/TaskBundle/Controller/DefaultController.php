<?php

namespace Demo\TaskBundle\Controller;

use Demo\TaskBundle\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TaskBundle:Default:index.html.twig', array('name' => $name));
    }

    public function newAction(Request $request) {
        $task = new Task();
        $task->setTask('First task');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task','text')
            ->add('dueDate','date')
            ->add('save','submit')
            ->getForm();

        return $this->render('TaskBundle:Default:new.html.twig',array('form'=> $form->createView()));
    }
}
