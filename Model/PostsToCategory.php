<?php

namespace LapaLabs\BlogBundle\Model;

/**
 * Class PostsToCategory
 */
trait PostsToCategory
{
    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="LapaLabs\BlogBundle\Model\PostCategoryInterface", inversedBy="posts")
     */
    protected $category;

    /**
     * @return PostCategoryInterface|AbstractCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param PostCategoryInterface|AbstractCategory $category
     */
    public function setCategory(PostCategoryInterface $category = null)
    {
        $this->category = $category;
    }
}
