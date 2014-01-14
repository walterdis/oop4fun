<?php

namespace Pizza\Ingredient;


abstract class AbstractIngredient {

    /**
     * @var String
     */
    private $name;

    /**
     * @param string $name
     */
    abstract public function __construct($name);


    /**
     * @param String $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

} 