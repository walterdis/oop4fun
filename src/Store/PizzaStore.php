<?php
namespace Store;

class PizzaStore
{
    /**
     * @var \Pizza\AbstractPizzaFactory
     */
    private $pizzaFactory;

    /**
     * @param \Pizza\AbstractPizzaFactory $pizzaFactory
     */
    public function __construct($pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    /**
     * @param \Pizza\AbstractPizzaFactory $pizzaFactory
     */
    public function setPizzaFactory($pizzaFactory)
    {
        $this->pizzaFactory = $pizzaFactory;
    }

    /**
     * @param string $pizzaType
     * @return \Pizza\AbstractPizza
     */
    public function order($pizzaType = null)
    {
        $pizza = $this->pizzaFactory->create($pizzaType);

        echo 'Creating <strong>'.$pizza->getName().'</strong><br><br>';

        $pizza->prepare();

        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

}