<?php

namespace App\Form;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Tag;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', NULL,[
                'attr' => ['class'=>'form-control'],
                'label'=>'Titre',
            ])
            ->add('content', NULL,[
                'attr' => ['class'=>'form-control'],
                'label'=>'Contenue',

            ])
            ->add('content', CKEditorType::class, [
                'attr' => ['class' => 'espaceCustom', 'rows' => 5],
                'label'=>'Contenue',
            ])



            ->add('image', NULL,[
                'attr' => ['class'=>'form-control'],
                'label'=>'Image',
            ])

            ->add('createAt', NULL,[
                'attr' => ['class'=>'form-control'],
                'widget' => 'single_text',
                'label'=>'Crée le',
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
            'data_class' => Article::class,
        ]);
    }
}
