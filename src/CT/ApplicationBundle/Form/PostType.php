<?php

namespace CT\ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title','text')
            ->add('video', 'entity',array(
              'class' => 'CTVideoBundle:Video',
              'property' => 'videoName'
            ))
            ->add('community_id' , 'hidden',array(
              'mapped' => false
            ))
            ->add('content','textarea')
            ->add('post','submit')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CT\ApplicationBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ct_applicationbundle_post';
    }
}
