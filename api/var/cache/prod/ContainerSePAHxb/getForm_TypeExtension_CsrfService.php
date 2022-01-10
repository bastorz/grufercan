<?php

namespace ContainerSePAHxb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_TypeExtension_CsrfService extends App_KernelProdContainer
{
    /*
     * Gets the private 'form.type_extension.csrf' shared service.
     *
     * @return \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['form.type_extension.csrf'] = new \Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension(($container->services['.container.private.security.csrf.token_manager'] ?? $container->load('get_Container_Private_Security_Csrf_TokenManagerService')), true, '_token', NULL, 'validators', ($container->privates['form.server_params'] ?? $container->load('getForm_ServerParamsService')));
    }
}
