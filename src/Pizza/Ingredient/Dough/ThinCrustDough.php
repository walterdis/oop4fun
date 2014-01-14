<?php

namespace Pizza\Ingredient\Dough;

use Pizza\Ingredient\AbstractIngredient;

class ThinCrustDough extends AbstractIngredient
{
    /**
     * @param string $name
     */
    public function __construct($name = 'Thin Crust Dough')
    {
        $this->setName($name);
    }

}