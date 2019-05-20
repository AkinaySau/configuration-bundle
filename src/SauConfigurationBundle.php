<?php


namespace Sau\Bundle\ConfigurationBundle;


use Sau\Bundle\ConfigurationBundle\DependencyInjection\Compiler\FormPass;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\VarDumper\VarDumper;

class SauConfigurationBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new FormPass(),PassConfig::TYPE_BEFORE_OPTIMIZATION, 30);
        parent::build($container);
    }
}
