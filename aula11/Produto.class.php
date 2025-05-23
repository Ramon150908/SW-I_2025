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
        public function setNome(){
            $this->Nome = $nome;
        }
        public function getPreco(){
            return $this->Preco;
        }
        public function getQtde(){
            return $this->Qtde;
        }

    }



?>