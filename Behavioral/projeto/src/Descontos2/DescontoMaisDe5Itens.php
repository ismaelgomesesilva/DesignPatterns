<?php

namespace Alura\DesignPattern\Descontos2;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): Orcamento
    {
        if ($orcamento->quantidadeItens > 5) {
            $orcamento->desconto = $orcamento->valor * 0.1;
            return $orcamento;
        }

        return parent::calculaDesconto($orcamento);
    }
}
