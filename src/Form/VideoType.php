<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Tag;
use App\Entity\Video;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VideoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('lien', NULL,[
                'attr' => ['class'=>'form-control']
            ])
            ->add('description', CKEditorType::class, [
                'attr' => ['class' => 'espaceCustom', 'rows' => 5],
            ])
            ->add('tags', EntityType::class,[
                'class' => Tag::class,
                'attr' => ['class'=>'form-control'],
                'choice_label' => function (Tag $tag) {
                    return $tag->getNom();
                },
                'multiple' => true,
                'expanded' => true
            ])
            ->add('categorie', EntityType::class,[
                'class' => Categorie::class,
                'attr' => ['class'=>'form-control'],
                'choice_label' => function (Categorie $type) {
                    return $type->getNom();
                }
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Video::class,
        ]);
    }
}
