<?php

namespace DesignPattern\Behavioral\Mediator;

class SellerProduct
{
    public string $id;
    public string $name;
    public float $price;

    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
}
