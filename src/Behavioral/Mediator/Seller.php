<?php

namespace DesignPattern\Behavioral\Mediator;

use  DesignPattern\Behavioral\Mediator\Mediator;

class Seller
{
    public $products = [];
    private Mediator $mediator;

    public function showAll(): void
    {
        foreach ($this->products as $product) {
            echo $product->id . " " .  $product->name . " " .  $product->price . "\n";
        }
    }

    public function addProduct($product): void
    {
        //foreach ($products as $product) {
        $this->products[] = $product;
        //}
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function sell(String $id)
    {
        foreach ($this->products as $index => $product) {
            if ($product->id == $id) {
                $productIndex = $index;
            }
        }

        if (!isset($productIndex)) return;
        $returnObject = $this->products[$productIndex];
        unset($this->products[$productIndex]);

        return $returnObject;
    }
}
