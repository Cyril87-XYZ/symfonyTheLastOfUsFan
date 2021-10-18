<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Contact1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('email', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('sujet', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('message', NULL,[
                'attr' => ['class'=>'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
