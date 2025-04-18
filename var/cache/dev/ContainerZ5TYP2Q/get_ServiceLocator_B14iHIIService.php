<?php

namespace ContainerZ5TYP2Q;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B14iHIIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.b14iHII' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b14iHII'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\ExamplePageController::index' => ['privates', '.service_locator.egipcEH.App\\Controller\\ExamplePageController::index()', 'getExamplePageControllerindexService', true],
            'App\\Controller\\ExamplePageController::rezerwujPrezent' => ['privates', '.service_locator.egipcEH.App\\Controller\\ExamplePageController::rezerwujPrezent()', 'getExamplePageControllerrezerwujPrezentService', true],
            'App\\Controller\\ExamplePageTwoController::index' => ['privates', '.service_locator.TYGoHWB.App\\Controller\\ExamplePageTwoController::index()', 'getExamplePageTwoControllerindexService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\ExamplePageController:index' => ['privates', '.service_locator.egipcEH.App\\Controller\\ExamplePageController::index()', 'getExamplePageControllerindexService', true],
            'App\\Controller\\ExamplePageController:rezerwujPrezent' => ['privates', '.service_locator.egipcEH.App\\Controller\\ExamplePageController::rezerwujPrezent()', 'getExamplePageControllerrezerwujPrezentService', true],
            'App\\Controller\\ExamplePageTwoController:index' => ['privates', '.service_locator.TYGoHWB.App\\Controller\\ExamplePageTwoController::index()', 'getExamplePageTwoControllerindexService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\ExamplePageController::index' => '?',
            'App\\Controller\\ExamplePageController::rezerwujPrezent' => '?',
            'App\\Controller\\ExamplePageTwoController::index' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\ExamplePageController:index' => '?',
            'App\\Controller\\ExamplePageController:rezerwujPrezent' => '?',
            'App\\Controller\\ExamplePageTwoController:index' => '?',
        ]);
    }
}
