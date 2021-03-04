<?php

use  DesignPattern\Behavioral\Mediator\Seller;
use  DesignPattern\Behavioral\Mediator\Mediator;
use  DesignPattern\Behavioral\Mediator\SellerProduct;

require "vendor/autoload.php";
$mediator = new Mediator();

$seller1 = new Seller();
$seller1->addProduct(new SellerProduct($id = 1, $name = "camiseta", $price = 49.9));
$seller1->addProduct(new SellerProduct($id = 2, $name = "calça", $price = 20));

$seller2 = new Seller();
$seller2->addProduct(new SellerProduct($id = 3, $name = "carro", $price = 30009.9));
$seller2->addProduct(new SellerProduct($id = 4, $name = "caminhao", $price = 500000));
echo "fim";
