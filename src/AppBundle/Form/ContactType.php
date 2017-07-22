<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstname','text',array('label' => 'First name','required'=>true))
                ->add('lastname','text',array('label' => 'Last Name','required'=>true))
                ->add('email','text',array('label' => 'Email','required'=>true))
                ->add('telephone','text',array('label' => 'Phone','required'=>true))
                 ->add('genre',ChoiceType::class,
                        array('label'=>'Gender' ,'choices' => array(
                        'male' => '1',
                        'female' => '0'),
                    'choices_as_values' => true,'multiple'=>false,'expanded'=>true))
                ->add('id_type_contact','integer',array('label' => 'ID Type Contact','required'=>true));

    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contact'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_contact';
    }


}
