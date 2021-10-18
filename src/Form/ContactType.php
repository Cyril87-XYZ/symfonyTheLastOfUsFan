<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\User;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var User|null $user */
        $user = $options['user'] instanceof User ? $options['user'] : null;
        $builder
            ->add('pseudo',NULL, [
                'label' => 'Pseudo :',
                'attr' => ['class' => 'espaceCustom'],
                'data'=> $user?->getPseudo()
            ])
            ->add('email',NULL, [
                'label' => 'Adresse Email :',
                'attr' => ['class' => 'espaceCustom'],
                'data'=> $user?->getEmail()
            ])
            ->add('sujet', NULL,[
                'label' => 'Sujet :',
                'attr' => ['class' => 'espaceCustom']
            ])

            ->add('message', CKEditorType::class, [
                'attr' => ['class' => 'espaceCustom', 'rows' => 5],
                'label' => 'Message :'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
            'user' => null,
        ]);
    }
}