<?php
/*Mehdi NAOUI
BTS SIO SLAM, 2025
Task.php
Represent a task entity.
*/
namespace App\Entity;
//---------------------------------------------------
use SymfonyComponent\Validator\Constraints as Assert;

//Define a class "Task" for task managment.
class Task
{   
    
    // Attribute:
    #[Assert\NotBlank]
    //Name of the task
    protected string $task;
    
    #[Assert\NotBlank]
    #[Assert\Type(DateTimeInterface::class)]
    //Due date.Optionnal attribute.Can be null.
    protected ?\DateTimeinterface $dueDate;
    
    // Methods:
    //Get the task.
    public function getTask(): string
    {
        return $this->task;
    }

    //Set the task.Take a string as argument.
    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    //Get due date
    public function getDueDate(): ?\DateTimeInterface
    {
        return $this->dueDate;
    }

    //Set due date.
    public function setDueDate(?\DateTimeInterface $dueDate): void 
    {
        $this->dueDate = $dueDate;
    }
}

