<?php
    include_once "Conta.class.php";

    $conta1 = new Conta();

    //var_dump($conta1);

    $conta1-> Nome = "Cleber";
    $conta1-> Cpf = "123.345.678-90";
    //$conta1-> Saldo = 500;

    //var_dump($conta1);

    $conta1->ConsultarSaldo();
    echo"<hr>";

    echo $conta1->Depositar(250);
    echo"<hr>";

    //$conta1->ConsultarSaldo();
    //echo"<hr>";







?>