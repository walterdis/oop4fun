<?php

namespace Pizza\Ingredient\Cheese;

use Pizza\Ingredient\AbstractIngredient;

class MozzarellaCheese extends AbstractIngredient
{
    /**
     * @param string $name
     */
    public function __construct($name = 'Mozzarella Cheese')
    {
        $this->setName($name);
    }

}