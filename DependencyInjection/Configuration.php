<?php

/*
 * Copyright 2012 Jonathan Ingram <jonathan.b.ingram@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Jbi\BrowscapBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @author Jonathan Ingram <jonathan.b.ingram@gmail.com>
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jbi_browscap');

        $rootNode
            ->children()
                ->scalarNode('cache_dir')->cannotBeEmpty()->defaultValue('%kernel.cache_dir%/jbi_browscap')->end()
                ->scalarNode('remote_ini_url')->end()
                ->scalarNode('remote_ver_url')->end()
                ->scalarNode('do_auto_update')->end()
            ->end();

        return $treeBuilder;
    }
}
