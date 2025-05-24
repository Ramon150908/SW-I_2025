<?php
    class Produto{
        private $Nome;
        private $Preco;
        private $Qtde;

        public function __construct($nome,$preco = 0,$qtde = 0) {
            $this->Nome = $nome;
            $this->Preco = $preco;
            $this->Qtde = $qtde;
        }
        public function getNome(){
            return $this->Nome;
        }
        public function setNome($nome){
            $this->Nome = $nome;
        }
        public function getPreco(){
            return $this->Preco;
        }
        public function setPreco($preco){
            $this->Preco = $preco; 
        }

        public function addestoque($qtde){
            if ($qtde < 0) {
                echo"ERRO!";
            }else{
                $this->Qtde += $qtde;
            }
        }
        
        public function Removerestoque($qtde){
            if ($qtde < 0) {
                echo"ERRO!";
            }else{
                $this->Qtde -= $qtde;
            }  
        } 
        
        public function mostrarDetalhes(){
            echo"Produto: " . $this->Nome . "<br><hr>";
            echo"Preço: " . $this->Preco . "<br><hr>";
            echo"Quantidade em estoque: " . $this->Qtde . "<br><hr>";
        }

    }



?>