<?php

//Solicite o preço de uma mercadoria e o percentual de desconto. Exiba o valor do desconto e o preço a pagar.

print "Qual mercadoria você deseja comprar?";
$produto = fgets (STDIN);

print "Qual é o preço do(a) $produto ?";
$preco_produto = fgets (STDIN);

print "Qual é o preço de desconto que você deseja?";
$desconto = fgets (STDIN);

$desconto_total = ($desconto/100)*$preco_produto;

$produto_com_desconto = $preco_produto - $desconto_total ;

print "O preço do desconto do(a) $produto é de: R$ $desconto_total \n";

print "O preço do(a) $produto com desconto é de: R$ $produto_com_desconto";

