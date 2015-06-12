<?php

namespace LapaLabs\BlogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class CategoryToPosts
 */
trait CategoryToPosts
{
    /**
     * @var AbstractPost[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="LapaLabs\BlogBundle\Model\CategoryPostInterface", mappedBy="category")
     */
    protected $posts;

    /**
     * @return CategoryPostInterface[]|AbstractPost[]|ArrayCollection
     */
    public function getPosts()
    {
        return $this->posts;
    }

    /**
     * @param CategoryPostInterface[]|AbstractPost[]|ArrayCollection $posts
     */
    public function setPosts(ArrayCollection $posts)
    {
        $this->posts = $posts;
    }
}
