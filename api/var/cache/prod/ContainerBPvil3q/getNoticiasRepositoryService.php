<?php

namespace ContainerBPvil3q;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNoticiasRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\NoticiasRepository' shared autowired service.
     *
     * @return \App\Repository\NoticiasRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\NoticiasRepository'] = new \App\Repository\NoticiasRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
