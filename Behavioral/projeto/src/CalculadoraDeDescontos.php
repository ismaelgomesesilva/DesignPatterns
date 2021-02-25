<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\DescontoMaisDe500Reais;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {

        $cadeiaDeDesconto = new DescontoMaisDe5Itens(new DescontoMaisDe500Reais(new SemDesconto()));

        return $cadeiaDeDesconto->calculaDesconto($orcamento);

        // if($orcamento->quantidadeItens > 5){
        //     return $orcamento->valor * 0.1;
        // }

        // if($orcamento->valor > 500){
        //     return $orcamento->valor * 0.05;
        // }
        // return 0;
    }
}
