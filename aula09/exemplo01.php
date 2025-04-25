<?php
    include_once"Pessoa.class.php";
    
    //Instanciar um objeto ou mais (novas pessoa)
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;


    //Atribuir alguns novos valores
    $pessoa1-> Nome = "Fulaninho de tal";
    $pessoa1-> Peso = 93;
    $pessoa1-> Altura = 1.85;

    $pessoa2-> Nome = "Isa";
    $pessoa2-> Peso = 48;
    $pessoa2-> Altura = 1.49;

    //Chamando um método da classe pessoa
    $pessoa1-> MostrarDados();
    echo"<br>";
    $pessoa2-> MostrarDados();

?>