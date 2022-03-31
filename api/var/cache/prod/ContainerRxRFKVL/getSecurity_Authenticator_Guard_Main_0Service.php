<?php

namespace ContainerRxRFKVL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Guard_Main_0Service extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.guard.main.0' shared service.
     *
     * @return \Symfony\Component\Security\Guard\Authenticator\GuardBridgeAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['security.authenticator.guard.main.0'] = new \Symfony\Component\Security\Guard\Authenticator\GuardBridgeAuthenticator(new \App\Security\JwtAuthenticator(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['parameter_bag'] ?? ($container->privates['parameter_bag'] = new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)))), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')));
    }
}
