<?php


namespace Sau\Bundle\ConfigurationBundle\DependencyInjection;


use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FormCollector
{
    protected $list;
    /**
     * @var ContainerInterface
     */
    private $container;

    public function __construct()
    {
        $this->list = new ArrayCollection();
    }

    public function add($item)
    {
        $this->list->add($item);
    }

    /**
     * @param ContainerInterface $container
     *
     * @return ArrayCollection
     */
    public function getList(ContainerInterface $container): ArrayCollection
    {
        $this->container = $container;

        $this->list->map(
            function ($i, $k) {
                dump($i, $k);
                if ($this->container->has($i)) {
                    $this->container->get($i);
                }
            }
        );
        die();

        return $this->list;
    }
}
