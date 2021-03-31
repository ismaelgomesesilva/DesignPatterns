<?php

namespace Alura\DesignPattern\Descontos2;

use Alura\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): Orcamento
    {
        $orcamento->desconto = 0;
        return $orcamento;
    }
}
