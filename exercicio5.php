<?php
//Calcule o tempo de uma viagem de carro. Pergunte a distância a percorrer e a velocidade média esperada para a viagem.

print "Qual é a distância da sua viagem? (Em km)";
$distancia = fgets (STDIN);

print "Qual a velocidade média do veículo?(Em Km/h)";
$velocidade_media = fgets (STDIN);

$tempo = $distancia / $velocidade_media;

print "O tempo que você levará para fazer a viagem é de $tempo hora(s) ";