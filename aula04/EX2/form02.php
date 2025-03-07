<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    if ($num1 > $num2 and $num2 > $num3){
        echo 'O maior número é: ',$num1 ;}

    elseif ($num1 > $num3 and $num3 > $num2){
        echo 'O maior número é: ',$num1 ;}

    elseif ($num2 > $num1 and $num1 > $num3){
        echo 'O maior número é: ',$num2 ;}
    elseif ($num2 > $num3 and $num3 > $num1){
        echo 'O maior número é: ',$num2 ;}
    elseif ($num3 > $num2 and $num2 > $num1){
        echo 'O maior número é: ',$num3 ;}
    elseif ($num3 > $num1 and $num1 > $num2){
        echo 'O maior número é: ',$num3 ;}


?>