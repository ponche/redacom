<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\IsTrue;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez votre prénom',
                    ])
                ],
                'label' => 'Prénom',
            ])
            ->add('lastname', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez Votre nom',
                    ])
                ],
                'label' => 'Nom', 
            ])
            ->add('email', null, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entre votre adresse email',
                    ])

                ],
                'label' => 'Email : ', 
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez entrez un mot de passe ',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Votre mot de passe doit avoir au minimun  {{ limit }} caractère ',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                'label' => 'taper un mot de passe : ', 
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('save' , SubmitType::class, [
                'label' => 'Enregistrer', 
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
