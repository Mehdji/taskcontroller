<?php
/*Mehdi NAOUI
BTS SIO SLAM, 2025
TaskController
src/Controller/.php

Controller class that handle HTTP requests related to tasks and
to manage the creation and rendering of forms for the task entity.
*/
namespace App\Controller;

use App\Entity\Task;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\Type\TaskType;

class TaskController extends AbstractController
{
    #[Route("/task/new", name: "task_new")]
    public function new(Request $request): Response
    {

        //Creates a task object and initializes some data for this example
        $task = new Task();
        $task->setTask("To do");
        $task->setDueDate(new \DateTimeImmutable('tomorrow'));
        
        //Creating the form using "createForm" .
        //TaskType::Class refere to the form type class that 
        //describe the structure.
        // The ::class syntax is a way to get the 
        // fully qualified class name as a string in PHP
        $form = $this->createForm(TaskType::class, $task);


        //CreateFormBuilder method initializes form builder that
        //construct the form.$Task object is  the data model
        //that the form will be bound to.
        $form = $this->createFormBuilder($task)
        //"add" method is used to add fields to the form.
            ->add("task", TextType::class,['label' => 'Task:'])
            ->add("dueDate", DateType::class,['label' => 'Due Date:'])
            ->add('save', SubmitType::class, ['label' => 'Create Task',
            'attr' => ['class' => 'btn']])
            ->getForm();
        
        return $this->render('TaskController/index.html.twig', [
            'form' => $form,
        ]);
    }
}



