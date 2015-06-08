<?php

namespace LapaLabs\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

abstract class AbstractPostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('published', null, [
                'label' => 'lapalabs.blog.published',
            ])
            ->add('heading', null, [
                'label' => 'lapalabs.blog.heading',
            ])
            ->add('excerpt', null, [
                'label' => 'lapalabs.blog.excerpt',
            ])
            ->add('content', null, [
                'label' => 'lapalabs.blog.content',
            ])
            ->add('title', null, [
                'label' => 'lapalabs.blog.title',
            ])
            ->add('description', null, [
                'label' => 'lapalabs.blog.description',
            ])
            ->add('keywords', null, [
                'label' => 'lapalabs.blog.keywords',
            ])
            ->add('slug', null, [
                'label' => 'lapalabs.blog.slug',
            ])
        ;
    }
    
//    /**
//     * @param OptionsResolverInterface $resolver
//     */
//    public function setDefaultOptions(OptionsResolverInterface $resolver)
//    {
//        $resolver->setDefaults(array(
//            'data_class' => 'AppBundle\Entity\Post'
//        ));
//    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_post';
    }
}
