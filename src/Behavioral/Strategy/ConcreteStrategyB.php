<?php

namespace DesignPattern\Behavioral\Strategy;

class ConcreteStrategyB implements Strategy
{

    public function doAlgorithm(array $data): array
    {
        rsort($data);

        return $data;
    }
}
