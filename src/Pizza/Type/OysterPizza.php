<?php

namespace Pizza\Type;

use Pizza\AbstractPizza;
use Pizza\PizzaIngredientFactoryInterface;

class OysterPizza extends AbstractPizza {

    /**
     * @param PizzaIngredientFactoryInterface $ingredientFactory
     * @param String $pizzaName
     */
    public function __construct(PizzaIngredientFactoryInterface $ingredientFactory, $pizzaName = 'Oyster Pizza')
    {
        parent::__construct();

        $this->setIngredientFactory($ingredientFactory);
        $this->setName($pizzaName);

        $this->getCook()->setBakingMinute(2);
        $this->getCook()->setBakingSecond(27);
    }


    /**
     * @return void
     */
    public function prepare() {
        $dough = $this->getIngredientFactory()->createDough();
        $this->setDough($dough);

        $sauce = $this->getIngredientFactory()->createSauce();
        $this->setSauce($sauce);

        $cheese = $this->getIngredientFactory()->createCheese();
        $this->setCheese($cheese);

        echo 'Dough: <strong>'.$this->getDough()->getName().'</strong><br /><br />';

        echo '<strong>The cheese comes first in this pizza</strong><br />';
        echo 'Cheese: <strong>'.$this->getCheese()->getName().'</strong><br /><br />';

        echo 'Sauce: <strong>'.$this->getSauce()->getName().'</strong><br />';
    }

}