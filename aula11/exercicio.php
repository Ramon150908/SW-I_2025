<?php
    include_once "Produto.class.php";
    $produto = new Produto("Mouse",124.99,15);

    //$produto->setPreco(124.99);
    $produto->addestoque(13);
    $produto->removerestoque(3);
    $produto->mostrarDetalhes();
?>