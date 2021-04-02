<?php

use DesignPattern\Behavioral\State\Context;
use DesignPattern\Behavioral\State\ConcreteStateA;

require "./vendor/autoload.php";

$context = new Context(new ConcreteStateA());
$context->request1();
$context->request2();
