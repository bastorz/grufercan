<?php

namespace ContainerRxRFKVL;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFileUploadControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FileUploadController' shared autowired service.
     *
     * @return \App\Controller\FileUploadController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FileUploadController'] = $instance = new \App\Controller\FileUploadController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\FileUploadController', $container));

        return $instance;
    }
}
