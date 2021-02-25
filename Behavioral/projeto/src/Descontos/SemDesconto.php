<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function __construct()
    {
    }
    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0.0;
    }
}
