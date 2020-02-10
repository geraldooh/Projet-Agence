<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraint as Assert;

class Recherche {

    /**
     * @var int|null
     */
    private $maxPrix;

    /**
     * @var int|null
     */
    private $minPrix;

    /**
     * @var int|null
     *
     */
    private $minSurface;

    /**
     * @var ArrayCollection
     */
    private $options;

    public function __construct()
    {
        $this->options = new ArrayCollection();
    }

    /**
     * Get the value of maxPrix
     *
     * @return  int|null
     */ 
    public function getMaxPrix()
    {
        return $this->maxPrix;
    }

    /**
     * Set the value of maxPrix
     *
     * @param  int|null  $maxPrix
     *
     * @return  self
     */ 
    public function setMaxPrix($maxPrix)
    {
        $this->maxPrix = $maxPrix;

        return $this;
    }

    /**
     * Get the value of minPrix
     *
     * @return  int|null
     */ 
    public function getMinPrix()
    {
        return $this->minPrix;
    }

    /**
     * Set the value of minPrix
     *
     * @param  int|null  $minPrix
     *
     * @return  self
     */ 
    public function setMinPrix($minPrix)
    {
        $this->minPrix = $minPrix;

        return $this;
    }

    /**
     * Get the value of minSurface
     *
     * @return  int|null
     */ 
    public function getMinSurface()
    {
        return $this->minSurface;
    }

    /**
     * Set the value of minSurface
     *
     * @param  int|null  $minSurface
     *
     * @return  self
     */ 
    public function setMinSurface($minSurface)
    {
        $this->minSurface = $minSurface;

        return $this;
    }

    /**
     * Get the value of options
     *
     * @return  ArrayCollection
     */ 
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set the value of options
     *
     * @param  ArrayCollection  $options
     *
     * @return  self
     */ 
    public function setOptions(ArrayCollection $options)
    {
        $this->options = $options;

        return $this;
    }
}