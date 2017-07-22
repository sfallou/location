<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class RentUserRoomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       
        $builder->add('userRoomId',HiddenType::class,array('label' => 'ID user_room','required'=>true))
                ->add('rentAmount','integer',array('label' => 'Rent Amount','required'=>true))
                ->add('rentDate1','date',array('label' => 'Période du ','widget' => 'single_text','required'=>true))
                ->add('rentDate2','date',array('label' => 'Au ','widget' => 'single_text','required'=>true))
                ->add('rentDate','date',array('label' => 'Date ','widget' => 'single_text','required'=>true));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\RentUserRoom'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_rentuserroom';
    }


}
