<?php

namespace Application;

use Zend\Mvc\ModuleRouteListener;

/**
 * Class Module
 * @package Application
 */
class Module
{
    /**
     * Get the autoloader configuration.
     *
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return include __DIR__ . '/config/autoloader.config.php';
    }

    /**
     * Get the module configuration.
     *
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    /**
     * Get the controller configuration.
     *
     * @return array
     */
    public function getControllerConfig()
    {
        return include __DIR__ . '/config/controller.config.php';
    }
}
