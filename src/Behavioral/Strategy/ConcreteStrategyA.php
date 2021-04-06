<?php

namespace DesignPattern\Behavioral\Strategy;

class ConcreteStrategyA implements Strategy
{
    public function doAlgorithm(array $data): array
    {
        sort($data);
        return $data;
    }
}
