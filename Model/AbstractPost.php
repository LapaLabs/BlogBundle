<?php

namespace LapaLabs\BlogBundle\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class AbstractPost
 */
abstract class AbstractPost implements CategoryPostInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean")
     */
    protected $published;

    public function __construct()
    {
    }

    public function __toString()
    {
        return sprintf('Post #%d', $this->id);
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
     * Set published
     *
     * @param boolean $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
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
     * Get published
     *
     * @return boolean
     */
    public function isPublished()
    {
        return $this->published;
    }
}
