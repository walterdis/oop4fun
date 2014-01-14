<?php
require_once 'vendor/autoload.php';

$pizzaFactory = new \Pizza\Brazil\BrazilPizzaFactory();
$store = new \Store\PizzaStore($pizzaFactory);
$store->order('garlic');

echo '<hr />';
$store->order('oyster');

