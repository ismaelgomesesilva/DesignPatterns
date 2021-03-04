<?php
namespace Alura\DesignPattern\Impostos;

use Alura\DesignPattern\Orcamento;

Interface Imposto
{
    public function calculaImposto(Orcamento $orcamento):float;
}