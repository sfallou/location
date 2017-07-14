<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FixRoomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('roomId','integer',array('label' => 'ID Appart','required'=>true))
                ->add('fixId','integer',array('label' => 'ID Type Fix','required'=>true))
                ->add('fixDate','date',array('label' => 'Date Soumission','widget' => 'single_text','required'=>true))
                ->add('fixPriority','checkbox',array('label' => 'Prioritaire ?','required'=>false))
                ->add('fixComment','textarea',array('label' => 'Commentaires','required'=>true));
    }
    
   /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\FixRoom'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_fixroom';
    }

}



