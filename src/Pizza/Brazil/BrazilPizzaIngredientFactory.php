<?php

namespace Pizza\Brazil;

use Pizza\Ingredient\Cheese\MozzarellaCheese;
use Pizza\Ingredient\Dough\ThinCrustDough;
use Pizza\Ingredient\Sauce\SpicySauce;

use Pizza\PizzaIngredientFactoryInterface;

class BrazilPizzaIngredientFactory implements PizzaIngredientFactoryInterface {

    /**
     * @return ThinCrustDough
     */
    public function createDough()
    {
        return new ThinCrustDough('Brazil Thin Dough');
    }

    /**
     * @return SpicySauce
     */
    public function createSauce()
    {
        return new SpicySauce();
    }

    /**
     * @return MozzarellaCheese
     */
    public function createCheese()
    {
        return new MozzarellaCheese('Dat Mozza Cheese');
    }


} 