<?php
    include_once "Funcionario.class.php";
    $fulano = new Funcionario("Kleiton da Silva", 3000);    
    echo "<hr>";
    echo $fulano->ExibirInformacoes();
    echo $fulano->AumentarSalario(25);



?>