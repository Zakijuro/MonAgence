<?php

namespace App\Entity;

class PropertySearch{

    /**
     * @var int
     */
    private $maxPrice;


    /**
     * @var int
     */
    public $minSurface2;


    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }
    
    /**
     * @return int|null
     */
    /* public function getMinSurface(): ?int
    {
        return $this->minSurface;
    } */

    public function getMinSurface2(): ?int
    {
        return $this->minSurface2;
    }

    /**
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->surface = $minSurface;
        return $this;
    }
}