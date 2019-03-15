<?php
//Faça um programa que calcule o aumento de um salário. Ele deve solicitar o valor do salário e a porcentagem do aumento. Exiba o valor do aumento e do novo salário.

print "Qual é o seu salário atualmente?";
$salario_atual = fgets(STDIN);

print "Quanto você gostaria de ganhar de aumento?\n";
$aumento = fgets (STDIN);

$total_aumento = ($aumento/100)*$salario_atual;

print "Seu aumento será: $total_aumento";

$total_salario = $total_aumento + $salario_atual;

print "Seu salário com aumento será: $total_salario";