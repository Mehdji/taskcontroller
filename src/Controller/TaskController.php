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
use App\Form\Type\TaskType;
//---------------------------------------------------
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
//---------------------------------------------------
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//---------------------------------------------------
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
//---------------------------------------------------
use Doctrine\ORM\EntityManagerInterface;

class TaskController extends AbstractController
{
    #[Route("/task/new", name: "task_new")]
    public function new(EntityManagerInterface $entityManager ,Request $request): Response
    {
        $allTask = $entityManager->getRepository(task::class)->findAll();

        if(!$allTask){
            throw $this->createNotFoundException('No task found');
        }

        //Creates a task object and initializes some data for this example
        $task = new Task();
        
                    
        //Creating the form using "createForm" .
        //TaskType::Class refere to the form type class that 
        //describe the structure.
        // The ::class syntax is a way to get the 
        // fully qualified class name as a string in PHP
        $form = $this->createForm(TaskType::class, $task);

        //Process HTTP request
        //part of form handling process
        //take $resuest variable as argument
        //$request store all request :Get and POST, cookies...
        //WHen handleRequest is called symfony checks if the form have been submitted.
        //If it have been submitted  the data from the request are bind to the form.
        //form's field are populated with the data entered by the user.
        //form's internal state is updated to reflect whether 
        // it has been submitted and whether the submitted data is valid
        //Validation and Transformation are also performs
        //It validates the data against the contraints defined in the form type class(TaskType)
        //If the data is valid ,it is transformed it is transformed into the appropriate format 
        // and mapped to the corresponding properties of the data object (e.g., $task)
        //If invalid the form contain error messages that can be displayed to the user.
        $form->handleRequest($request);


     
   if($form->isSubmitted() && $form->isValid()){
            //form->getData() holds the submitted values
            //but, the original '$task' variable has also been updated.
            $task = $form->getData();
            
            //Tell docrine to save the task.
            $entityManager->persist($task);

            //Executes the queries(i.e. the INSERT query)
            $entityManager->flush();
            //...perform some action, such as saving the task to the database
          
            // Store the task data in session or flash messages
            // to display it after redirect
            
            return $this->redirectToRoute("task_new");
        }

              
            //Generate HTML twig template with render method.
        return $this->render('TaskController/index.html.twig', [
            'form' => $form,
            'allTask' => $allTask,
        ]);
    }
}



