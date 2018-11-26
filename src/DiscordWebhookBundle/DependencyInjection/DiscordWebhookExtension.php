<?php
declare(strict_types=1);

namespace DiscordWebhookBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class DiscordWebhookExtension
 *
 * @author Scrummer <scrummer@gmx.ch>
 * @package DiscordWebhookBundle\DependencyInjection
 */
class DiscordWebhookExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new YamlFileLoader($container, new FileLocator([__DIR__ . '/../Resources/config']));
        $loader->load('services.yaml');
    }
}
