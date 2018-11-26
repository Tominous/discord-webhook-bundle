<?php
declare(strict_types=1);

namespace DiscordWebhookBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @author Scrummer <scrummer@gmx.ch>
 * @package DiscordWebhookBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('discord_webhook');
        
        return $treeBuilder;
    }
}
