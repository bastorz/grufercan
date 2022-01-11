<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;


class MailerController extends AbstractController
{
     /**
     * @Route("/api/email", name="sendEmail", methods={"POST"})
     */
    public function sendEmail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('noreply@medanosol.es')
            ->to('david@medanosol.es')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);
        return new Response('Success', 200);
        // ...
    }
}