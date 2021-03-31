<?php

namespace Alura\DesignPattern\Descontos2;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): Orcamento
    {
        if ($orcamento->valor > 500) {
            $orcamento->desconto = $orcamento->valor * 0.05;
            return $orcamento;
        }

        return parent::calculaDesconto($orcamento);
    }
}
