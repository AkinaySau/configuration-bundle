<?php

namespace Sau\Bundle\ConfigurationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

abstract class AbstractConfiguration extends AbstractType
{
    abstract public function getAlias(): string;
}
