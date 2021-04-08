<?php

namespace DesignPattern\Behavioral\TemplateMethod;

use DesignPattern\Behavioral\TemplateMethod\AbstractClass;

class ConcreteClass1 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "Concrete Class 1 says: Implemented Operation1\n";
    }

    protected function requiredOperations2(): void
    {
        echo "Concrete Class 1 says: Implemented Operation2\n";
    }
}
