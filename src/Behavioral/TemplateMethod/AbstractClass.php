<?php

namespace DesignPattern\Behavioral\TemplateMethod;

abstract class AbstractClass
{
    /**
     * The skeleton of an algorithm.
     */
    final public function TemplateMethod(): void
    {
        $this->baseOperation1();
        $this->requiredOperations1();
        $this->baseOperation2();
        $this->hook1();
        $this->requiredOperations2();
        $this->baseOperation3();
        $this->hook2();
    }

    /**
     * Optional methods
     */

    protected function baseOperation1()
    {
        echo "Abstract Class says: I am doing the bulk of the work\n";
    }

    protected function baseOperation2()
    {
        echo "Abstract Class says: But I let subclasses override some operations\n";
    }

    protected function baseOperation3()
    {
        echo "Abstract Class says: But I am doing the bulk of the work anyway\n";
    }

    /**
     * These methods have to be implemented in subclasses
     */
    abstract protected function requiredOperations1(): void;

    abstract protected function requiredOperations2(): void;

    /**
     * Empty hooks
     */
    protected function hook1(): void
    {
    }

    protected function hook2(): void
    {
    }
}
