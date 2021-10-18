<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Tag;
use App\Entity\User;
use App\Entity\Video;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\TagRepository;
use App\Repository\VideoRepository;
use ContainerORwqCEO\get_Console_Command_ValidatorDebug_LazyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class TLUFrontController extends AbstractController
{
    #[Route('/tlu', name: 'tlu_front')]
    public function index(): Response
    {
        return $this->render('tlu_front/index.html.twig', [
            'controller_name' => 'TLUFrontController',
        ]);
    }

//////////////////////////////////////////HOME//////////////////////////////////

    #[Route('/', name: 'home')]
//    public function home(UserPasswordHasherInterface $hasher): Response
    public function home(): Response
    {
//        $em = $this->getDoctrine()->getManager();
//        $user = new User();
//        $user->setEmail('test@test.fr')
//            ->setPseudo('Tester')
//            ->setPassword($hasher->hashPassword($user,'test'))
//            ->setRoles(['ROLE_ADMIN']);
//
//        $em->persist($user);
//        $em->flush();

        return $this->render('tlu_front/home.html.twig');
    }

    //////////////////////////////////////////ARTICLE//////////////////////////////////


    //1
    #[Route('/article1', name: 'article')]
    public function article(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art=$repo->findBy(
            ['categorie'=> 1],
            ['createAt' => 'DESC']
            );
        return $this->render('tlu_front/article.html.twig',[
            'article' => $art,
        ]
        );
    }

    //2
    #[Route('/article2', name: 'article2')]
    public function article2(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art2=$repo->findBy(
            ['categorie'=> 2],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art2,
            ]
        );
    }

    //3
    #[Route('/article3', name: 'article3')]
    public function article3(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art3=$repo->findBy(
            ['categorie'=> 3],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art3,
            ]
        );
    }

    //4
    #[Route('/article4', name: 'article4')]
    public function article4(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art4=$repo->findBy(
            ['categorie'=> 4],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art4,
            ]
        );
    }

    //5
    #[Route('/article5', name: 'article5')]
    public function article5(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art5=$repo->findBy(
            ['categorie'=> 5],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art5,
            ]
        );
    }

    //6
    #[Route('/article6', name: 'article6')]
    public function article6(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art6=$repo->findBy(
            ['categorie'=> 6],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art6,
            ]
        );
    }

    //7
    #[Route('/article7', name: 'article7')]
    public function article7(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art7=$repo->findBy(
            ['categorie'=> 7],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art7,
            ]
        );
    }

    //8
    #[Route('/article8', name: 'article8')]
    public function article8(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art8=$repo->findBy(
            ['categorie'=> 8],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art8,
            ]
        );
    }

    //9
    #[Route('/article9', name: 'article9')]
    public function article9(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art9=$repo->findBy(
            ['categorie'=> 9],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art9,
            ]
        );
    }

    //10
    #[Route('/article10', name: 'article10')]
    public function article10(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art10=$repo->findBy(
            ['categorie'=> 10],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art10,
            ]
        );
    }

    //11
    #[Route('/article11', name: 'article11')]
    public function article11(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art11=$repo->findBy(
            ['categorie'=> 11],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art11,
            ]
        );
    }

    //12
    #[Route('/article12', name: 'article12')]
    public function article12(ArticleRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $art12=$repo->findBy(
            ['categorie'=> 12],
            ['createAt' => 'DESC']

        );
        return $this->render('tlu_front/article.html.twig',[
                'article' => $art12,
            ]
        );
    }
    //////////////////////////////////////////VIDEO//////////////////////////////////

    //1
    #[Route('/video1', name: 'video')]
    public function video(VideoRepository $repo): Response
    {
        $vid=$repo->findBy(
            ['categorie'=> 13]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid,
            ]
        );
    }

    //2
    #[Route('/video2', name: 'video2')]
    public function video2(VideoRepository $repo): Response
    {
        $vid2=$repo->findBy(
            ['categorie'=> 14]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid2,
            ]
        );
    }

    //3
    #[Route('/video3', name: 'video3')]
    public function video3(VideoRepository $repo): Response
    {
        $vid3=$repo->findBy(
            ['categorie'=> 15]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid3,
            ]
        );
    }

    //4
    #[Route('/video4', name: 'video4')]
    public function video4(VideoRepository $repo): Response
    {
        $vid4=$repo->findBy(
            ['categorie'=> 16]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid4,
            ]
        );
    }

    //5
    #[Route('/video5', name: 'video5')]
    public function video5(VideoRepository $repo): Response
    {
        $vid5=$repo->findBy(
            ['categorie'=> 17]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid5,
            ]
        );
    }

    //6
    #[Route('/video6', name: 'video6')]
    public function video6(VideoRepository $repo): Response
    {
        $vid6=$repo->findBy(
            ['categorie'=> 18]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid6,
            ]
        );
    }

    //7
    #[Route('/video7', name: 'video7')]
    public function video7(VideoRepository $repo): Response
    {
        $vid7=$repo->findBy(
            ['categorie'=> 19]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid7,
            ]
        );
    }

    //8
    #[Route('/video8', name: 'video8')]
    public function video8(VideoRepository $repo): Response
    {
        $vid8=$repo->findBy(
            ['categorie'=> 20]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid8,
            ]
        );
    }

    //9
    #[Route('/video9', name: 'video9')]
    public function video9(VideoRepository $repo): Response
    {
        $vid9=$repo->findBy(
            ['categorie'=> 21]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid9,
            ]
        );
    }

    //10
    #[Route('/video10', name: 'video10')]
    public function video10(VideoRepository $repo): Response
    {
        $vid10=$repo->findBy(
            ['categorie'=> 22]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid10,
            ]
        );
    }

    //11
    #[Route('/video11', name: 'video11')]
    public function video11(VideoRepository $repo): Response
    {
        $vid11=$repo->findBy(
            ['categorie'=> 23]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid11,
            ]
        );
    }

    //12
    #[Route('/video12', name: 'video12')]
    public function video12(VideoRepository $repo): Response
    {
        $vid12=$repo->findBy(
            ['categorie'=> 24]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid12,
            ]
        );
    }

    //13
    #[Route('/video13', name: 'video13')]
    public function video13(VideoRepository $repo): Response
    {
        $vid13=$repo->findBy(
            ['categorie'=> 25]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid13,
            ]
        );
    }

    //14
    #[Route('/video14', name: 'video14')]
    public function video14(VideoRepository $repo): Response
    {
        $vid14=$repo->findBy(
            ['categorie'=> 26]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid14,
            ]
        );
    }

    //15
    #[Route('/video15', name: 'video15')]
    public function video15(VideoRepository $repo): Response
    {
        $vid15=$repo->findBy(
            ['categorie'=> 27]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid15,
            ]
        );
    }

    //16
    #[Route('/video16', name: 'video16')]
    public function video16(VideoRepository $repo): Response
    {
        $vid16=$repo->findBy(
            ['categorie'=> 28]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid16,
            ]
        );
    }

    //17
    #[Route('/video17', name: 'video17')]
    public function video17(VideoRepository $repo): Response
    {
        $vid17=$repo->findBy(
            ['categorie'=> 29]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid17,
            ]
        );
    }

    //18
    #[Route('/video18', name: 'video18')]
    public function video18(VideoRepository $repo): Response
    {
        $vid18=$repo->findBy(
            ['categorie'=> 30]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid18,
            ]
        );
    }

    //19
    #[Route('/video19', name: 'video19')]
    public function video19(VideoRepository $repo): Response
    {
        $vid19=$repo->findBy(
            ['categorie'=> 31]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid19,
            ]
        );
    }

    //20
    #[Route('/video20', name: 'video20')]
    public function video20(VideoRepository $repo): Response
    {
        $vid20=$repo->findBy(
            ['categorie'=> 32]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid20,
            ]
        );
    }

    //21
    #[Route('/video21', name: 'video21')]
    public function video21(VideoRepository $repo): Response
    {
        $vid21=$repo->findBy(
            ['categorie'=> 33]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid21,
            ]
        );
    }

    //22
    #[Route('/video22', name: 'video22')]
    public function video22(VideoRepository $repo): Response
    {
        $vid22=$repo->findBy(
            ['categorie'=> 34]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid22,
            ]
        );
    }

    //23
    #[Route('/video23', name: 'video23')]
    public function video23(VideoRepository $repo): Response
    {
        $vid23=$repo->findBy(
            ['categorie'=> 35]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid23,
            ]
        );
    }

    //24
    #[Route('/video24', name: 'video24')]
    public function video24(VideoRepository $repo): Response
    {
        $vid24=$repo->findBy(
            ['categorie'=> 36]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid24,
            ]
        );
    }

    //25
    #[Route('/video25', name: 'video25')]
    public function video25(VideoRepository $repo): Response
    {
        $vid25=$repo->findBy(
            ['categorie'=> 37]
        );
        return $this->render('tlu_front/video.html.twig',[
                'video' => $vid25,
            ]
        );
    }


    //////////////////////////////////////////TAG//////////////////////////////////

    #[Route('/tag1', name: 'tag')]
    public function tag(TagRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
       $tag=$repo->findAll();

        return $this->render('tlu_front/tag.html.twig',[
                'tag' => $tag,
            ]
        );
    }




//////////////////////////////////////////CATEGORIE//////////////////////////////////

    #[Route('/categorie1', name: 'categorie')]
    public function categorie(CategorieRepository $repo): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);
        $categorie=$repo->findAll();

        return $this->render('tlu_front/categorie.html.twig',[
                'categorie' => $categorie,
            ]
        );
    }



    //////////////////////////////////////////LEGAL//////////////////////////////////

    #[Route('/legal', name: 'legal')]
    public function legal(): Response
    {
//        $repo=$this->getDoctrine()->getManager()->getRepository(Article::class);


        return $this->render('tlu_front/mentionLegal.html.twig');
    }



    //////////////////////////////////////////listeCatégorie//////////////////////////////////

    //Article
    #[Route('/listeCatégorieArticle', name: 'listeCatégorieArticle')]
    public function listeCatégorieArticle(): Response
    {
        return $this->render('tlu_front/catégorieArticle/listeCatégorieArticle.html.twig');
    }

    //Article1
    #[Route('/catégorieArticle1', name: 'catégorieArticle1')]
    public function catégorieArticle1(): Response
    {
        return $this->render('tlu_front/catégorieArticle/catégorieArticle1.html.twig');
    }

    //Article2
    #[Route('/catégorieArticle2', name: 'catégorieArticle2')]
    public function catégorieArticle2(): Response
    {
        return $this->render('tlu_front/catégorieArticle/catégorieArticle2.html.twig');
    }

    //Article3
    #[Route('/catégorieArticle3', name: 'catégorieArticle3')]
    public function catégorieArticle3(): Response
    {
        return $this->render('tlu_front/catégorieArticle/catégorieArticle3.html.twig');
    }

    //Article4
    #[Route('/catégorieArticle4', name: 'catégorieArticle4')]
    public function catégorieArticle4(): Response
    {
        return $this->render('tlu_front/catégorieArticle/catégorieArticle4.html.twig');
    }

    //Article5
    #[Route('/catégorieArticle5', name: 'catégorieArticle5')]
    public function catégorieArticle5(): Response
    {
        return $this->render('tlu_front/catégorieArticle/catégorieArticle5.html.twig');
    }

    //Article6
    #[Route('/catégorieArticle6', name: 'catégorieArticle6')]
    public function catégorieArticle6(): Response
    {
        return $this->render('tlu_front/catégorieArticle/catégorieArticle6.html.twig');
    }







    //Video
    #[Route('/listeCatégorieVideo', name: 'listeCatégorieVideo')]
    public function listeCatégorieVideo(): Response
    {
        return $this->render('tlu_front/catégorieVideo/listeCatégorieVideo.html.twig');
    }

    //Video1
    #[Route('/catégorieVidéo1', name: 'catégorieVidéo1')]
    public function catégorieVidéo1(): Response
    {
        return $this->render('tlu_front/catégorieVideo/catégorieVidéo1.html.twig');
    }


    //Video2
    #[Route('/catégorieVidéo2', name: 'catégorieVidéo2')]
    public function catégorieVidéo2(): Response
    {
        return $this->render('tlu_front/catégorieVideo/catégorieVidéo2.html.twig');
    }


    //Video3
    #[Route('/catégorieVidéo3', name: 'catégorieVidéo3')]
    public function catégorieVidéo3(): Response
    {
        return $this->render('tlu_front/catégorieVideo/catégorieVidéo3.html.twig');
    }


    //Video4
    #[Route('/catégorieVidéo4', name: 'catégorieVidéo4')]
    public function catégorieVidéo4(): Response
    {
        return $this->render('tlu_front/catégorieVideo/catégorieVidéo4.html.twig');
    }



    //////////////////////////////////////SHOW///////////////////////////////////////////////////

    //Article
    #[Route('/show/{id}', name: 'montreArticle')]
    public function show(Article $art): Response
    {
        return $this->render('tlu_front/montreArticle.html.twig',[
            'article' => $art,
        ]);
    }

    //Video
    #[Route('/show1/{id}', name: 'montreVideo')]
    public function show1(Video $vid): Response
    {
        return $this->render('tlu_front/montreVideo.html.twig',[
            'video' => $vid,
        ]);
    }
}


