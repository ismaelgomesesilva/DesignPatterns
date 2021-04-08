<?php

namespace DesignPattern\Behavioral\TemplateMethod;

use DesignPattern\Behavioral\TemplateMethod\AbstractClass;

class ConcreteClass2 extends AbstractClass
{
    protected function requiredOperations1(): void
    {
        echo "ConcreteClass2 says: Implemented Operation1\n";
    }

    protected function requiredOperations2(): void
    {
        echo "ConcreteClass2 says: Implemented Operation2\n";
    }

    protected function hook1(): void
    {
        echo "ConcreteClass2 says: Override Hook1\n";
    }
}
