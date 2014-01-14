<?php
namespace Pizza;


abstract class AbstractPizzaFactory {

    /**
     * @var PizzaIngredientFactoryInterface
     */
    private $ingredientFactory;

    public function __construct(PizzaIngredientFactoryInterface $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    /**
     * @return PizzaIngredientFactoryInterface
     */
    public function getIngredientFactory()
    {
        return $this->ingredientFactory;
    }

    /**
     * @return AbstractPizza
     */
    abstract public function create($pizzaType = null);
}