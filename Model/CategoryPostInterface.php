<?php

namespace LapaLabs\BlogBundle\Model;

/**
 * Interface CategoryPostInterface
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
