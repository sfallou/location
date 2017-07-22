<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentUserRoomType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('userRoomId','integer',array('label' => 'ID user_room','required'=>true))
                ->add('documentId','integer',array('label' => 'ID Document','required'=>true))
                ->add('documentDate','date',array('label' => 'Date ','widget' => 'single_text','required'=>true))
                ->add('documentComment','textarea',array('label' => 'Commentaires','required'=>false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\DocumentUserRoom'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_documentuserroom';
    }


}
