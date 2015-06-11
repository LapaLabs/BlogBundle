<?php

namespace LapaLabs\BlogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface PostCategoryInterface
 */
interface PostCategoryInterface
{
    /**
     * @return CategoryPostInterface[]|ArrayCollection
     */
    public function getPosts();

    /**
     * @param CategoryPostInterface[]|ArrayCollection $posts
     */
    public function setPosts(ArrayCollection $posts);
}
