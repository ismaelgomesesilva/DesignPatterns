<?php

namespace DesignPattern\Behavioral\Mediator;

class Buyer
{
    private $mediator;

    public function __construct(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }

    public function viewProducts(): void
    {
        $this->mediator->showProducts();
    }

    public function buy($id)
    {
        $this->mediator->buy($id);
    }
}
