<?php


namespace Sau\Bundle\ConfigurationBundle\DependencyInjection;

use Sau\Bundle\ConfigurationBundle\DependencyInjection\Compiler\FormPass;
use Sau\Bundle\ConfigurationBundle\Form\AbstractConfiguration;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Compiler\PassConfig;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

class SauConfigurationExtension extends Extension
{

    /**
     * Loads a specific configuration.
     *
     * @param array            $configs
     * @param ContainerBuilder $container
     *
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config        = $this->processConfiguration($configuration, $configs);

        $container->registerForAutoconfiguration(AbstractConfiguration::class)
                  ->addTag('sau.configuration_form');
        $loader = new YamlFileLoader($container, new FileLocator(dirname(__DIR__).'/Resources/config'));
        $loader->load('sonata_admin.yaml');
        $loader->load('services.yaml');
    }

}
