<?php

namespace DesignPattern\Behavioral\Mediator;

class Mediator
{
    private $sellers = [];

    public function addSeller(...$seller)
    {
        foreach ($seller as $sellerObject) {
            $this->sellers[] = $sellerObject;
        }
    }

    public function buy(string $id)
    {
        foreach ($this->sellers as $index => $seller) {
            $product = $seller->sell($id);

            if ($product) {
                echo "Seu produto é \n ID " . $product->id . "\n name - " . $product->name . " \n price- " . $product->price . "\n";
                return;
            }
        }
        echo "Não encontrei produto com ID " . $id;
    }

    public function showProducts(): void
    {
        foreach ($this->sellers as $seller) {
            $seller->showAll();
        }
    }
}
