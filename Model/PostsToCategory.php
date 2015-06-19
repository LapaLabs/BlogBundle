<?php

namespace LapaLabs\BlogBundle\Model;

/**
 * Class PostsToCategory
 *
 * @author Victor Bocharsky <bocharsky.bw@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License
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
