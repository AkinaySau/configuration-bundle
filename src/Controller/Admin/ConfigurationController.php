<?php

namespace Sau\Bundle\ConfigurationBundle\Controller\Admin;

use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

class ConfigurationController extends CRUDController
{
    public function configsAction()
    {
        if ( ! $this->has('sau.configurations.form_collector')) {
            throw new ServiceNotFoundException('sau.configurations.form_collector');
        }
        $collector = $this->get('sau.configurations.form_collector');
        $data      = [
            'collector' => $collector,
        ];

        return $this->originalRender('@SauConfiguration/configuration-crud/list.html.twig', $data);
    }
}
