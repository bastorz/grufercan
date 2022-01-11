<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class MailerController extends AbstractController
{
     /**
     * @Route("/api/email", name="sendEmail", methods={"POST"})
     */
    public function sendEmail(MailerInterface $mailer, Request $request): Response
    {
        $email = (new Email())
            ->from('noreply@medanosol.es')
            ->to($request->get("email"))
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Grufercan test email')
            ->text($request->get("message"))
            ->html('<p>Gracias por ponerte en contacto con nosotros, atenderemos tu solicitud lo antes posible </p>');
        // var_dump($request->get("name"));
        // var_dump($request->get("email"));
        // var_dump($request->get("phone"));
        // var_dump($request->get("message"));

        $mailer->send($email);
        return new Response('Success', 200);
        // ...
    }
}