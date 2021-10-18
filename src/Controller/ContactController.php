<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\User;
use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
date_default_timezone_set('Europe/Paris');

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, MailerInterface $mailer)
    {
        $user = $this->getUser();
        $option = $user instanceof User ? ['user' => $user] : [];
        $form = $this->createForm(ContactType::class, null, $option);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();

            $message = (new Email())
                ->from($contactFormData->getEmail())
                ->to('TheLastOfUs.Ellie87@gmail.com')
                ->subject($contactFormData->getSujet())
                ->html('Sender : ' . $contactFormData->getEmail() . \PHP_EOL .
                    $contactFormData->getMessage(),
                    'text/plain');
            $mailer->send($message);

            $contact = new Contact();
            $contact = $contactFormData;
            $contact->setCreatedAt(new \DateTime());
            $this->addFlash('success', 'Votre message a bien été envoyée !');

            $em->persist($contact);
            $em->flush();
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}


