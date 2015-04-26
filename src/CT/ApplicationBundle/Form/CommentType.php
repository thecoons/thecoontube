<?php

namespace CT\ApplicationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
  /**
  * @param FormBuilderInterface $builder
  * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('title','text')
    ->add('content','textarea')
    ->add('note', 'choice', array(
      'choices'   => array('1' => 1,'2' => 2,'3' => 3,'4' => 4,'5' => 5,'6' => 6,'7' => 7,'8' => 8,'9' => 9,'10' => 10,)
    ))
    ->add('post','submit')
    ;
  }

  /**
  * @param OptionsResolverInterface $resolver
  */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'CT\ApplicationBundle\Entity\Comment'
    ));
  }

  /**
  * @return string
  */
  public function getName()
  {
    return 'ct_applicationbundle_comment';
  }
}
