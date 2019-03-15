<?php
//Escreva um programa que leia a quantidade de dias, horas, minutos e segundos do usuário. Calcule o total em segundos.

print "Quantos dias você passa na frente do computador?";

$qntd_dias =(int) fgets (STDIN);

$qntd_horas = $qntd_dias*24;

$qntd_minutos = $qntd_horas*60;

$qntd_segundos = $qntd_minutos*60;

print "Você passa $qntd_dias dia(s) na frente do computador, ou seja você passa $qntd_segundos segundos na frente do computador";
