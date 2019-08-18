<?php

namespace App\Form;

use App\Entity\Enterprise;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType; 
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class RequestDevisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('genre', ChoiceType::class, [
                'label' => 'Civilité',  
                'choices' => [
                    'Monsieur' => 'Monsieur', 
                    'Madame' => 'Madame', 
                ]
            ])
            ->add('lastNamePeople', null, [
                'label' => 'Nom' ,
            ])
            ->add('firstNamePeople',  null, [
                'label' => 'Prénom' , 
            ])
            ->add('nameEnterprise', null, [
                'label' => 'Nom de votre Société ',
            ])
            ->add('mail', EmailType::class, [
                'label' => 'Email', 
            ] )
            ->add('numberWorking', null, [
                'label' => 'Nombre de salarié', 
            ])
            ->add('phoneGSM', null,[
                'label' => 'Téléphone portable', 
            ])
            ->add('phoneFixe',  null,[
                'label' => 'Téléphone fixe' , 
            ])
            ->add('jobPeople',  null, [
                'label' => 'Votre Fonction ? ' , 
            ])
            ->add('instancePeople',  null, [
                'label' => 'Votre Instance du personnel : ' , 
            ])
            ->add('writtenPV',  null, [
                'label' => 'Actuellement, qui écrivent vos pv ? ' , 
            ])
            ->add('problemPv', null, [
                'label' => 'Quel est le problème rencontré ? ' ,
            ])
            ->add('save', SubmitType::class, [
                'label' => 'Envoyer le Formulaire ',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Enterprise::class,
        ]);
    }
}
