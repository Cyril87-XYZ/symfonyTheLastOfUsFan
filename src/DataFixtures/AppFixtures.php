<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        for($i = 1; $i <= 10; $i++){
//            $article = new Article();
//            $article->setTitle("Titre de l'article n°$i")
//                    ->setContent("<p>Contenue de l'article n°$i</p>")
//                    ->setImage("http://placehold.it/350x150")
//                    ->setCreateAt(new \DateTime());
//            $manager->persist($article);
//        }

        $manager->flush();
    }
}
