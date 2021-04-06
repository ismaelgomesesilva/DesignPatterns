<?php

namespace DesignPattern\Behavioral\Strategy;

interface Strategy
{
    public function doAlgorithm(array $data): array;
}
