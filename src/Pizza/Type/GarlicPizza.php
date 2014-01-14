<?php

namespace Pizza\Type;

use Pizza\AbstractPizza;
use Pizza\PizzaIngredientFactoryInterface;

class GarlicPizza extends AbstractPizza
{
    /**
     * @param PizzaIngredientFactoryInterface $ingredientFactory
     * @param String $pizzaName
     */
    public function __construct(PizzaIngredientFactoryInterface $ingredientFactory, $pizzaName = 'Garlic Pizza')
    {
        parent::__construct();

        $this->setIngredientFactory($ingredientFactory);
        $this->setName($pizzaName);
    }
}