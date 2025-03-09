<?php
/*Mehdi NAOUI
BTS SIO SLAM, 2025
TaskType,
src/Form/Type/.php

Creating Form Class
Define structure and configuration of a form that wil be used to
handle user input related to "Task entitity".
*/
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use App\Entity\Task;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

//TaskType is extended with AbstractType.
//AbstractType provide a foundation for building form.
class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('task', TextType::Class)
        ->add('dueDate', DateType::class)
        ->add('save', SubmitType::Class)
        ;
    }
    //"configureOptions" method set the default options for the form.
    //Tell symfony that the form is associated with "Task" entity.
    //Ovverdide the inherited method from AbstractType "configureOption"
    public function configureOptions(OptionsResolver $resolver): void
    {
        //ConfigureOptions" take one argument, "$resolver" which is
        //an instance of OptionResolver.
        

        //"setDefaults" function.
        //Tell symfony to map data on task class.
        $resolver->setDefaults([
           'data_class' => Task::class,
        ]);
    }
}
