<?php
//Escreva um programa que leia um valor em metros e o exiba convertido em milímetros.

print "Quantos metros você deseja converter em milímetros?";
$valor_metros = (int) fgets (STDIN);

$valor_milimetros = 1000*$valor_metros;

print "Resultado em milímetros:". $valor_milimetros;