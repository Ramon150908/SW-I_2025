<?php
    include_once "Aluno.class.php";
    $v_nome = $_POST["nome_Aluno"];
    $v_n1 = $_POST["nota1_Aluno"];
    $v_n2 = $_POST["nota2_Aluno"];



    $fulano = new Aluno($v_nome, $v_n1,$v_n2);

    $nota1 = $fulano->getNota1();
    $nota2 = $fulano->getNota2();
    $media = $fulano->Media($nota1,$nota2);

    echo "Aluno: " . $fulano->getNome() . "<hr>";
    echo "Média: " . $media = $fulano->Media($nota1,$nota2) . "<hr>"; 
    echo "Situação: ". $fulano->VerificarSituacao($media). "<hr>";
    



?>