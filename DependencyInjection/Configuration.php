<?php
namespace Jhg\NexmoSmsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jhg_nexmo_sms');

        $rootNode
            ->children()

                ->arrayNode('sms')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('repository_short')
                            ->defaultValue('JhgNexmoSmsBundle:BaseSms')
                        ->end()
                    ->end() // children
                ->end() // arrayNode sms

                ->arrayNode('receipt')
                    ->addDefaultsIfNotSet()
                    ->children()
                        ->scalarNode('class_name')
                            ->defaultValue('Jhg\NexmoSmsBundle\Entity\BaseSmsDeliveryReceipt')
                        ->end()
                    ->end() // children
                ->end() // arrayNode sms

            ->end() // children
        ;

        return $treeBuilder;
    }
}
