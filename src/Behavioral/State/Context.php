<?php

namespace DesignPattern\Behavioral\State;

use DesignPattern\Behavioral\State\State;

class Context
{

    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    public function request1()
    {
        $this->state->handle1();
    }

    public function request2()
    {
        $this->state->handle2();
    }
}
