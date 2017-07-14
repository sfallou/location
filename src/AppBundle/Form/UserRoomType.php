<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserRoomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userId')
                ->add('roomId')
                ->add('userRoomDateIn','date',array('label' => 'Date entrée','widget' => 'single_text','required'=>false))
                ->add('userRoomDateOut','date',array('label' => 'Date sortie','widget' => 'single_text','required'=>false))
                ->add('userRoomRent')
                ->add('userRoomGuarantee');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\UserRoom'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_userroom';
    }


}
