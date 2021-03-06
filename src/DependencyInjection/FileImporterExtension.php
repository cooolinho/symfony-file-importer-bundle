<?php

namespace Cooolinho\Bundle\FileImporterBundle\DependencyInjection;

use Cooolinho\Bundle\FileImporterBundle\FileImporterBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class FileImporterExtension extends Extension
{
    /**
     * @param array $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $locator = new FileLocator(__DIR__ . '/../Resources/config');
        $loader = new YamlFileLoader(
            $container,
            $locator
        );
        $loader->load(FileImporterBundle::CONFIGURATION_KEY . '.yaml');
    }
}
