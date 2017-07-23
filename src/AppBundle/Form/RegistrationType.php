<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname','text',array('label' => 'First Name'))
            ->add('lastname','text',array('label' => 'Last Name'))
            ->add('phone','text',array('label' => 'Phone'))
            ->add('roles', 'collection', array(
                   'type' => 'choice',
                   'options' => array(
                       'label' => false,
                       'choices' => array(
                            'ROLE_LOCATAIRE' => 'Locataire',
                            'ROLE_REFERENT' => 'Référent',
                            'ROLE_PROPRIO' => 'Proprietaire',
                            'ROLE_ADMIN' => 'Admin',
                           
                       )
                   ),"required"=>false,
               )
           );
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'location_user_registration';
    }
}