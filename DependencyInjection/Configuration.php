<?php

namespace Mhujer\FioApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('mhujer_fio_api');

        $rootNode
            ->children()
                ->scalarNode('token')->isRequired()->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}
