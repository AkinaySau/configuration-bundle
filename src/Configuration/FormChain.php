<?php


namespace Sau\Bundle\ConfigurationBundle\Configuration;


use Sau\Bundle\ConfigurationBundle\Form\AbstractConfiguration;

class FormChain
{
    private $forms;

    public function __construct()
    {
        $this->forms = [];
    }

    public function addForm(AbstractConfiguration $form)
    {
        $this->forms[] = $form;
    }

    /**
     * @return array
     */
    public function getForms(): array
    {
        return $this->forms;
    }
}
