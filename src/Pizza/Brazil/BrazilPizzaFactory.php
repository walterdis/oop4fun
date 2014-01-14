<?php

namespace Pizza\Brazil;

use Pizza\AbstractPizzaFactory;

use Pizza\Type\GarlicPizza;
use Pizza\Type\OysterPizza;

class BrazilPizzaFactory extends AbstractPizzaFactory
{

    public function __construct()
    {
        parent::__construct(new BrazilPizzaIngredientFactory());
    }

    /**
     * @param string $pizzaType
     * @throws \Exception
     * @return \Pizza\AbstractPizza
     */
    public function create($pizzaType = null)
    {
        switch($pizzaType) {
            case 'garlic':
                return new GarlicPizza($this->getIngredientFactory(), 'Nose Destroyer (Garlic)');
                break;

            case 'oyster':
                return new OysterPizza($this->getIngredientFactory());
                break;

            default:
                throw new \Exception('Erro ao criar pizza');
        }

    }

} 