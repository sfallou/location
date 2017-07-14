<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname','text',array('label' => 'Firstname'))
                ->add('lastname','text',array('label' => 'Lastname'))
                ->add('phone','text',array('label' => 'Téléphone'))
                ->add('contact_garant','text',array('label' => 'Contact du Garant'));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
}

