<?php

namespace DesignPattern\Behavioral\State;

use DesignPattern\Behavioral\State\State;
use DesignPattern\Behavioral\State\ConcreteStateA;

class ConcreteStateB extends State
{
    public function handle1(): void
    {
        echo "ConcreteStateB handles request1.\n";
    }

    public function handle2(): void
    {
        echo "ConcreteStateB handles request2.\n";
        echo "ConcreteStateB want to change the state of the context.\n";
        $this->context->transitionTo(new ConcreteStateA());
    }
}
