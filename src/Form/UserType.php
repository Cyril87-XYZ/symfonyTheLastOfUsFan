<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('pseudo', NULL,[
                'attr' => ['class'=>'form-control']
            ])

            ->add('password', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('isVerified',Null,[
            'label'=>'Vérification']
            )
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                    'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN',
                ],

                'label' => 'Rôles de l\'utilisateur',
                'expanded' => true,
                'multiple' => true,
            ]);




        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
