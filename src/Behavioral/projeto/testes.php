<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Impostos\Iss;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\CalculadoraDeDescontos2;
use Alura\DesignPattern\Descontos2\DescontoMaisDe5Itens;

require "vendor/autoload.php";

# Strategy
/*
 * O Strategy é um padrão de projeto comportamental que permite que você defina uma família de algoritmos, 
 * coloque-os em classes separadas, e faça os objetos deles intercambiáveis.
 */
// $calculadora = new CalculadoraDeImpostos();
// $orcamento  = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms);

# Chain of responsability
/*
O Chain of Responsibility é um padrão de projeto comportamental que permite que você passe pedidos por uma 
corrente de handlers. Ao receber um pedido, cada handler decide se processa o pedido ou o passa adiante para 
o próximo handler na corrente.

https://refactoring.guru/pt-br/design-patterns/chain-of-responsibility/php/example
*/
// $calculadora = new CalculadoraDeDescontos();
// $orcamento = new Orcamento();
// $orcamento->valor = 70;
// $orcamento->quantidadeItens = 1;

// echo $calculadora->calculaDescontos($orcamento);

// 2º exemplo
// https://www.youtube.com/watch?v=s7VeksnnpVA
$calculadora = new CalculadoraDeDescontos2();
$orcamento = new Orcamento();
$orcamento->valor = 70;
$orcamento->quantidadeItens = 100;

echo $calculadora->calculaDescontos($orcamento);
