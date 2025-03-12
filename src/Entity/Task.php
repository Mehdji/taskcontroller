<?php
/*Mehdi NAOUI
BTS SIO SLAM, 2025
Task.php
Represent a task entity.
*/
namespace App\Entity;
//---------------------------------------------------
use Symfony\Component\Validator\Constraints as Assert;
//---------------------------------------------------
use Doctrine\ORM\Mapping as ORM;


//Define a class "Task" for task managment.
#[ORM\Entity]
#[ORM\Table(name: "task")]
class Task
{   
    
    // Attribute:

    //Task's ID
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    #[Assert\NotBlank]
    //Name of the task
    protected string $task;
    
    #[ORM\Column(type: 'datetime', nullable: true)]
    #[Assert\NotBlank]
    #[Assert\Type(\DateTimeInterface::class)]
    //Due date. Optional attribute. Can be null.
    protected ?\DateTimeInterface $dueDate;

    //Timestamp
    #[ORM\Column(type: 'datetime')]
    private \DateTimeInterface $createdAt;

    public function __construct()
    {

            $this->createdAt = new \DateTime();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }

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

    //Get created at timestamp
    public function getCreatedAt(): \DateTimeInterface
    {
        
        return $this->createdAt;
    }
}

