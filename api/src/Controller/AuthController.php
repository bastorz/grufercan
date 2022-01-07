<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\UserRepository;
use Firebase\JWT\JWT;
class AuthController extends AbstractController
{
    /**
     * @Route("/auth/login", name="login", methods={"POST"})
     */
    public function login(Request $request, UserRepository $userRepository, UserPasswordEncoderInterface $encoder)
    {
        $user = $userRepository->findOneBy([
                'email'=>$request->get('email'),
        ]);
        if (!$user || !$encoder->isPasswordValid($user, $request->get('password'))) {
                return $this->json([
                    "code" => 400,
                    'message' => 'email or password is wrong.',
                ]);
        }
        $payload = [
            "user" => $user->getUsername(),
            "exp"  => (new \DateTime())->modify("+30 days")->getTimestamp(),
        ];


        $jwt = JWT::encode($payload, $this->getParameter('jwt_secret'), 'HS256');
        return $this->json([
            "code" => 200,
            'message' => 'success!',
            'token' => sprintf('Bearer %s', $jwt),
        ]);
    }
    /**
     * @Route("/auth/register", name="register", methods={"POST"})
     */
    public function register(Request $request, UserPasswordEncoderInterface $encoder)
    {
        // var_dump($request->get("password") . )
        $password = $request->get('password');
        $email = $request->get('email');
        $user = new User();
        $user->setPassword($encoder->encodePassword($user, $password));
        $user->setEmail($email);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->json([
            'user' => $user->getEmail()
        ]);
    }
}
