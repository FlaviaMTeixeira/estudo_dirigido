<?php 
//Escreva um programa que pergunte a quantidade de km percorridos por um carro alugado pelo usuário, assim como a quantidade de dias pelos quais o carro foi alugado. Calcule o preço a pagar, sabendo que o carro custa R$ 60,00 por dia e R$ 0,15 por km rodado.

print "Quantos km você rodou com o carro da locadora?";
$km_rodados = (int) fgets (STDIN);

print "Por quantos dias você alugou o carro?";
$dias_locados = (int) fgets (STDIN);

$valor_dias = $dias_locados * 60;
$valor_km_rodados = $km_rodados * 0.15;

$total_a_pagar = $valor_dias + $valor_km_rodados;

print "Valor por dia: $valor_dias reais \n";

print "Valor por Km rodado: $valor_km_rodados reais \n";

print "Total a pagar: $total_a_pagar reais";