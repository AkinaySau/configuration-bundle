<?php


namespace Sau\Bundle\ConfigurationBundle\DependencyInjection;


use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{

    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('sau_configuration');
        $treeBuilder->getRootNode()
                    ->children()
                        ->arrayNode('twitter')
                            ->children()
                                    ->integerNode('client_id')
                                        ->defaultValue(0)
                                    ->end()
                                    ->scalarNode('client_secret')
                                        ->defaultValue('none')
                                    ->end()
                                    ->integerNode('tter')->defaultValue(0)
                                ->end()
                            ->end()
                        ->end()// first
                    ->end();

        return $treeBuilder;
    }
}
