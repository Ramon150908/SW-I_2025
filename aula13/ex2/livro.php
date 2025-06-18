<?php
    include_once "Livro.class.php";
    $livro = new Livro("Diva","José de Alencar", false);
    echo"<br>";
    echo $livro->ExibirStatus();
    echo"<hr>";
    echo $livro->Emprestar();
    echo"<hr>";
    echo $livro->Devolver();
    




?>