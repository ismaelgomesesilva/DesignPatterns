<?php

namespace Alura\DesignPattern\Descontos2;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{

    protected Desconto $proximoDesconto;

    public function aplicaProximo(Desconto $desconto): Desconto
    {
        $this->proximoDesconto = $desconto;
        return $desconto;
    }

    public function calculaDesconto(Orcamento $orcamento): Orcamento
    {
        if ($this->proximoDesconto) {
            $this->proximoDesconto->calculaDesconto($orcamento);
        }

        return $orcamento;
    }
}
