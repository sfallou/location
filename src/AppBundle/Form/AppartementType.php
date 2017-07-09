<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AppartementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('adresse','text',array('label' => 'Adresse'))
            ->add('surface','text',array('label' => 'Surface'))
            ->add('wifi_code','text',array('label' => 'Code Wifi','required'=>false))
            ->add('contact_appart','text',array('label' => 'Contact appartement','required'=>false))
            ->add('id_residence','integer',array('label' => 'ID Résidence'))
            ->add('phone','text',array('label' => 'Phone','required'=>false))
            ->add('rib','text',array('label' => 'RIB'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Appartement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_appartement';
    }


}
