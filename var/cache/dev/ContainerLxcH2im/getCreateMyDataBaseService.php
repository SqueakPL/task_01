<?php

namespace ContainerLxcH2im;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateMyDataBaseService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Controller\CreateMyDataBase' shared autowired service.
     *
     * @return \App\Controller\CreateMyDataBase
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CreateMyDataBase.php';

        $container->privates['App\\Controller\\CreateMyDataBase'] = $instance = new \App\Controller\CreateMyDataBase();

        $instance->setName('app:create-my-database');

        return $instance;
    }
}
