<?php

namespace LapaLabs\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class AbstractPostType
 *
 * @author Victor Bocharsky <bocharsky.bw@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License
 */
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
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('category', null, [
                'label' => 'lapalabs.blog.category',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('heading', null, [
                'label' => 'lapalabs.blog.heading',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('excerpt', null, [
                'label' => 'lapalabs.blog.excerpt',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('content', null, [
                'label' => 'lapalabs.blog.content',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('title', null, [
                'label' => 'lapalabs.blog.title',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('description', null, [
                'label' => 'lapalabs.blog.description',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('keywords', null, [
                'label' => 'lapalabs.blog.keywords',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
            ->add('slug', null, [
                'label' => 'lapalabs.blog.slug',
                'translation_domain' => 'LapaLabsBlogBundle',
            ])
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_post';
    }
}
