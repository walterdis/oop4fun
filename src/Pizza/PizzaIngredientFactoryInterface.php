<?php

namespace Pizza;


interface PizzaIngredientFactoryInterface {

    public function createDough();
    public function createSauce();
    public function createCheese();

} 