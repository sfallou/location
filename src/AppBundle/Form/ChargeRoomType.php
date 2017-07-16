<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChargeRoomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roomId','integer',array('label' => 'ID Room','required'=>true))
                ->add('chargeId','integer',array('label' => 'ID Type Charge','required'=>true))
                ->add('chargeAmount','number',array('label' => 'Montant','required'=>true))
                ->add('chargeDate','date',array('label' => 'Date Soumission','widget' => 'single_text','required'=>true))
                ->add('chargeComment','textarea',array('label' => 'Commentaires','required'=>true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\ChargeRoom'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_chargeroom';
    }


}
