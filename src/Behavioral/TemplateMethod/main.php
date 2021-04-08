<?php

namespace DesignPattern\Behavioral\TemplateMethod;

use DesignPattern\Behavioral\TemplateMethod\AbstractClass;
use DesignPattern\Behavioral\TemplateMethod\ConcreteClass1;
use DesignPattern\Behavioral\TemplateMethod\ConcreteClass2;

require_once("./vendor/autoload.php");

function clientCode(AbstractClass $class)
{
    //...
    $class->TemplateMethod();
    //...
}

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClass1());

echo "\n";

echo "Same client code can work with different subclasses:\n";
clientCode(new ConcreteClass2());
