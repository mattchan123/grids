<?php

namespace ViewComponents\Grids;

use Interop\Container\ContainerInterface;
use ViewComponents\ViewComponents\Rendering\TemplateFinder;
use ViewComponents\ViewComponents\Service\ServiceContainer;
use ViewComponents\ViewComponents\Service\ServiceId;
use ViewComponents\ViewComponents\Service\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(ServiceContainer $container)
    {
        /** registers path to grid views */
        $container->extend(ServiceId::TEMPLATE_FINDER, function (TemplateFinder $finder) {
            $finder->registerPath(dirname(__DIR__) . '/resources/views');
            return $finder;
        });
    }
}
