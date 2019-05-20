<?php


namespace Sau\Bundle\ConfigurationBundle\Admin;


use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Route\RouteCollection;

final class Configuration extends AbstractAdmin
{
    protected $baseRoutePattern = 'sau_configuration';
    protected $baseRouteName = 'sau_configuration';

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->clear();
        $collection->add('configs');
    }
}
