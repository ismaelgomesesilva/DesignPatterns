<?php

use DesignPattern\Behavioral\Strategy\ConcreteStrategyA;
use DesignPattern\Behavioral\Strategy\ConcreteStrategyB;
use DesignPattern\Behavioral\Strategy\Context;

require "./vendor/autoload.php";

$context = new Context(new ConcreteStrategyA);

echo "Client: Strategy is set to normal sorting.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Client: Strategy is set to reserse sorting.\n";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();
