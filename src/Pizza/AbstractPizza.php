<?php

namespace Pizza;

use Pizza\Ingredient\AbstractIngredient;
use Store\Cook;

abstract class AbstractPizza {

    /**
     * @var PizzaIngredientFactoryInterface
     */
    private $ingredientFactory;

    /**
     * @var String
     */
    private $name;

    /**
     * @var AbstractIngredient
     */
    private $dough;

    /**
     * @var AbstractIngredient
     */
    private $sauce;

    /**
     * @var AbstractIngredient
     */
    private $cheese;

    /**
     * @var \Store\Cook
     */
    private $cook;

    private $toppings = array() ;

    public function __construct()
    {
        $this->cook = new Cook();
        $this->cook->setBakingMinute(1);
        $this->cook->setBakingSecond(10);
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

        echo 'Dough: <strong>'.$this->getDough()->getName().'</strong><br />';
        echo 'Sauce: <strong>'.$this->getSauce()->getName().'</strong><br />';
        echo 'Cheese: <strong>'.$this->getCheese()->getName().'</strong><br /><br />';
    }

    public function bake()
    {
        $this->cook->bake();
    }

    public function cut()
    {
        echo 'Cutting pizza <br />';
    }

    public function box()
    {
        echo 'Boxing pizza <br />';
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name = '')
    {
        $this->name = $name;
    }

    /**
     * @return \Store\Cook
     */
    public function getCook()
    {
        return $this->cook;
    }

    /**
     * @param AbstractIngredient $cheese
     */
    public function setCheese(AbstractIngredient $cheese)
    {
        $this->cheese = $cheese;
    }

    /**
     * @return AbstractIngredient
     */
    public function getCheese()
    {
        return $this->cheese;
    }

    /**
     * @param AbstractIngredient $dough
     */
    public function setDough(AbstractIngredient $dough)
    {
        $this->dough = $dough;
    }

    /**
     * @return AbstractIngredient
     */
    public function getDough()
    {
        return $this->dough;
    }

    /**
     * @param AbstractIngredient $sauce
     */
    public function setSauce(AbstractIngredient $sauce)
    {
        $this->sauce = $sauce;
    }

    /**
     * @return AbstractSauce
     */
    public function getSauce()
    {
        return $this->sauce;
    }

    /**
     * @param PizzaIngredientFactoryInterface $ingredientFactory
     */
    public function setIngredientFactory(PizzaIngredientFactoryInterface $ingredientFactory)
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

} 