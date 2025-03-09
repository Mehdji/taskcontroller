<?php
/*Mehdi NAOUI
BTS SIO SLAM, 2025
Task.php
Represent a task entity.
*/
namespace App\Entity;

//Define a class "Task" for task managment.
class Task
{
    // Attribute:
    //Name of the task
    protected string $task;
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

