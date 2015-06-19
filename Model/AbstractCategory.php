<?php

namespace LapaLabs\BlogBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractCategory
 *
 * @author Victor Bocharsky <bocharsky.bw@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php The MIT License
 */
abstract class AbstractCategory implements PostCategoryInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var bool
     *
     * @ORM\Column(type="boolean")
     */
    protected $published;

    public function __construct()
    {
    }

    public function __toString()
    {
        return sprintf('Category #%d', $this->id);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Is published
     *
     * @return bool
     */
    public function isPublished()
    {
        return $this->published;
    }

    /**
     * Set published to true
     *
     * @return $this
     */
    public function publish()
    {
        $this->published = true;

        return $this;
    }

    /**
     * Set published to false
     *
     * @return $this
     */
    public function unpublish()
    {
        $this->published = false;

        return $this;
    }

    /**
     * Set published
     *
     * @param bool $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }
}
