<?php
//(DESAFIO) Faça um Programa para uma loja de tintas. O programa deverá pedir o tamanho em metros
//quadrados da área a ser pintada. Considere que a cobertura da tinta é de 1 litro para cada 6 metros
//quadrados e que a tinta é vendida em latas de 18 litros, que custam R$ 80,00 ou em galões de 3,6 litros,
//que custam R$ 25,00. Informe ao usuário as quantidades de tinta a serem compradas e os respectivos
//preços em 3 situações:
//a. comprar apenas latas de 18 litros;
//b. comprar apenas galões de 3,6 litros;
//c. misturar latas e galões, de forma que o preço seja o menor. Acrescente 10% de folga e sempre
//arredonde os valores para cima, isto é, considere latas cheias.

print "Quantos m² você deseja pintar?";
$metros_quadrados = (int) fgets(STDIN);

print "Tabela de Preços:\n";
print "Opção 1 = Latas: 18L --- R$80,00\n";
print "Opção 2 = Galões: 3,6L --- R$25,00\n";
print "Opção 3 = Galões e Latas\n";
print "Qual opção você gostaria?";
$opcao = (int) fgets (STDIN);

if ($opcao == 1) {
    $litros_necessarios = $metros_quadrados / 6;
    $latas_necessarias = $litros_necessarios / 18;
    $preco_latas = ceil($latas_necessarias * 80);

    print "A opção escolhida foi: $opcao.\n";
    print "Sua compra sairá no valor de:R$ $preco_latas \n";
    print "Você precisará de $latas_necessarias lata(s)";

}

else if($opcao == 2){
    $litros_necessarios = $metros_quadrados / 6;
    $galoes_necessarios = $litros_necessarios / 3.6;
    $preco_galoes = ceil($galoes_necessarios * 25);

    print "A opção escolhida foi: $opcao.\n";
    print "Sua compra sairá no valor de:R$ $preco_galoes \n";
    print "Você precisará de $galoes_necessarios galões (s)";

}

elseif($opcao == 3){

    $metros_quadrados *= 1.1;
    
    $litros_necessarios = $metros_quadrados / 6;
    $latas_necessarias = (int) ($litros_necessarios / 18);
    $resto = ceil($litros_necessarios) % 18;
    $galoes_necessarios = ceil($resto / 3.6);


    $preco_latas = ($latas_necessarias ) * 80;
    $preco_galoes = ($latas_necessarias ) * 25;
    $preco_total = $preco_galoes + $preco_latas;
    
    print "A opção escolhida foi: $opcao.\n";
    print "Sua compra sairá no valor de:R$ $preco_total \n";
    print "Você precisará de $galoes_necessarios galão (ões) e $latas_necessarias lata(s)";

}
    
   