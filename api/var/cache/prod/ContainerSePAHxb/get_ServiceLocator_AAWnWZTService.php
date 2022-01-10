<?php

namespace ContainerSePAHxb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_AAWnWZTService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.AAWnWZT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.AAWnWZT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'encoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'encoder' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
