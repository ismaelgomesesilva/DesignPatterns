<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos2\SemDesconto;
use Alura\DesignPattern\Descontos2\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos2\DescontoMaisDe500Reais;

class CalculadoraDeDescontos2
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDesconto = new DescontoMaisDe5Itens();
        $cadeiaDeDesconto->aplicaProximo(new DescontoMaisDe500Reais())
            ->aplicaProximo(new SemDesconto());

        $cadeiaDeDesconto->calculaDesconto($orcamento);

        return $orcamento->desconto;

        // if($orcamento->quantidadeItens > 5){
        //     return $orcamento->valor * 0.1;
        // }

        // if($orcamento->valor > 500){
        //     return $orcamento->valor * 0.05;
        // }
        // return 0;
    }
}
