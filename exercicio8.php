<?php
//Escreva um programa para calcular a redução do tempo de vida de um fumante. Pergunte a quantidade
//de cigarros fumados por dia e quantos anos ele já fumou. Considere que um fumante perde 10 minutos
//de vida a cada cigarro, calcule quantos dias de vida um fumante perderá. Exiba o total de dias.

print "Quantos cigarros você fuma por dia: ";
$cigarros_por_dia = fgets(STDIN);

print "Quantos anos você fuma: ";
$anos_fumados = fgets(STDIN);


$quantidade_cigarros = $cigarros_por_dia * 10;
$dias_fumados = $anos_fumados * 365;
$quantidade_minutos = $dias_fumados * $quantidade_cigarros;
$quantidade_horas = $quantidade_minutos / 60;
$quantidade_dias = round($quantidade_horas / 24);



print "Você perdeu $quantidade_dias dias de vida! \n" ;