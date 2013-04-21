<?php

namespace AYAH;

/**
 * Class Module
 * @package AYAH
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
     * Get the controller plugin configuration.
     * @return array
     */
    public function getControllerPluginConfig()
    {
        return include __DIR__ . '/config/controller.plugin.config.php';
    }

    /**
     * Get the service configuration.
     *
     * @return array
     */
    public function getServiceConfig()
    {
        return include __DIR__ . '/config/service.config.php';
    }
}
