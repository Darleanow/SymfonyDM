<?php

<<<<<<<< HEAD:var/cache/dev/ContainerSBytbox/getContainer_GetenvService.php
namespace ContainerSBytbox;

========
namespace ContainerLVMUex8;
>>>>>>>> fd6f3db (PDO INCLUDE MYSQL):var/cache/dev/ContainerLVMUex8/getContainer_GetenvService.php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContainer_GetenvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'container.getenv' shared service.
     *
     * @return \Closure
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['container.getenv'] = $container->getEnv(...);
    }
}