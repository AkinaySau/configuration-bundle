<?php


namespace Sau\Bundle\ConfigurationBundle\DependencyInjection\Compiler;


use Sau\Bundle\ConfigurationBundle\Configuration\FormChain;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\VarDumper\VarDumper;

class FormPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if ( ! $container->has('sau.configurations.form_collector')) {
            return;
        }
        $definition = $container->findDefinition('sau.configurations.form_collector');

        $taggedServices = $container->findTaggedServiceIds('sau.configuration_form');

        foreach ($taggedServices as $id => $tags) {
            $definition->addMethodCall('addForm', [new Reference($id)]);
        }

    }
}
