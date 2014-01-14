<?php

namespace Pizza\Ingredient\Sauce;

use Pizza\Ingredient\AbstractIngredient;

class SpicySauce extends AbstractIngredient
{
    /**
     * @param string $name
     */
    public function __construct($name = 'Spicy Sauce')
    {
        $this->setName($name);
    }
} 