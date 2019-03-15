<?php
//Converta uma temperatura digitada em Celsius para Fahrenheit. F = 9*C/5 + 32

print "Quantos graus °C você deseja converter para Fahrenheit? ";
$celsius = (int) fgets (STDIN);

$fahrenheit = (9*($celsius/5)) +32;

print "$celsius °C = $fahrenheit °F";