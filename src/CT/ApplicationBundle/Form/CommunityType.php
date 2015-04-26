<?php

namespace CT\ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use CT\UserBundle\Form\Type\ImageType;

class CommunityType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text')
            ->add('image', new ImageType())
            ->add('create','submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CT\ApplicationBundle\Entity\Community'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ct_applicationbundle_community';
    }
}
