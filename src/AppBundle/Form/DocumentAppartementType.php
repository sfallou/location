<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DocumentAppartementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('appartId','integer',array('label' => 'ID Appart','required'=>true))
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
            'data_class' => 'AppBundle\Entity\DocumentAppartement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_documentappartement';
    }


}
