<?php

namespace LapaLabs\BlogBundle\Model;

/**
 * Interface CategoryPostInterface
 *
 * @author Victor Bocharsky <bocharsky.bw@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License
 */
interface CategoryPostInterface
{
    /**
     * @return PostCategoryInterface
     */
    public function getCategory();

    /**
     * @param PostCategoryInterface $category
     */
    public function setCategory(PostCategoryInterface $category = null);
}
