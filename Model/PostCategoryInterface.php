<?php

namespace LapaLabs\BlogBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Interface PostCategoryInterface
 *
 * @author Victor Bocharsky <bocharsky.bw@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License
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
