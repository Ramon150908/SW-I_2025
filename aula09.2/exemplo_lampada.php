<?php
    include_once 'Lampada.class.php';
    $lamp1 = new Lampada();
    //var_dump($lamp1); o Var_dump mostra as caracteristicas da variavel que você quer observar
    $lamp1->Fabricante = "Philips";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "Branca";

    $lamp1->Desligar();
    $lamp1->MostrarDados();
    $lamp1->Ligar();
    $lamp1->MostrarDados();





?>