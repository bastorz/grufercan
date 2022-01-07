<?php
namespace App\Security;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ContainerBagInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\AbstractGuardAuthenticator;
use Firebase\JWT\JWT;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\User;

class JwtAuthenticator extends AbstractGuardAuthenticator
{
    private $em;
    private $params;

    public function __construct(EntityManagerInterface $em, ContainerBagInterface $params)
    {
        $this->em = $em;
        $this->params = $params;
    }

    public function start(Request $request, AuthenticationException $authException = null) 
    { 
        $data = [ 
            'message' => 'Authentication Required'
        ];
        return new JsonResponse($data, Response::HTTP_UNAUTHORIZED);
    }

    public function supports(Request $request)
    {
      if($request->headers->has("Authorization")){
        return true;
      }
      throw new AuthenticationException("Protected endpoint");
    }

    public function getCredentials(Request $request)
    {
        return $request->headers->get('Authorization');
    }

    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        try {
          // var_dump("dwadwadw" . $this->em->getRepository(User::class)
          // ->findOneBy([
          //         'email' => "hey",
          // ]));
            $credentials = str_replace('Bearer ', '', $credentials);
            if(!$credentials) throw new Exception("No token");
            $jwt = (array) JWT::decode(
                              $credentials, 
                              $this->params->get('jwt_secret'),
                              ['HS256']
                            );
            return $this->em->getRepository(User::class)
                    ->findOneBy([
                            'email' => $jwt['user'],
                    ]);
        }catch (Exception $exception) {

                throw new AuthenticationException($exception->getMessage());
        }
    }

    public function checkCredentials($credentials, UserInterface $user)
    {

        $credentials = str_replace('Bearer ', '', $credentials);
        $jwt = (array) JWT::decode($credentials, $this->params->get('jwt_secret'), ['HS256']);
        return $user->getEmail() === $jwt['user'];
    }

    public function onAuthenticationFailure(Request $request, AuthenticationException $exception)
    {

        return new JsonResponse([
                'message' => $exception->getMessage()
        ], Response::HTTP_UNAUTHORIZED);
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $providerKey)
    {
        return;
    }

    public function supportsRememberMe()
    {
        return false;
    }
}