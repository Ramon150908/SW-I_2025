<?php
    class Livro{
        private $autor;
        private $titulo;
        private $disponivel;

        public function __construct($titulo,$autor,$disponivel){
            $this->Titulo = $titulo;
            $this->Autor = $autor;
            $this->Disponivel = $disponivel;
        }
        public function Emprestar(){
            if ($this->Disponivel == true) {
                $this->Disponivel = false;
            }else {
                echo "O livro já foi emprestado!";
            }
        }
        public function Devolver(){
            $this->Disponivel = true;
                echo"Livro devolvido com sucesso!";
        }
        public function getTitulo(){
            return $this->Titulo;
        }    
        public function getDisponivel(){
            return $this->Disponivel;
        }
        public function getAutor(){
            return $this->Autor;
        }
        public function ExibirStatus(){
            $titulo_livro = $this->getTitulo();

            if ($this->getDisponivel() == true) {
                $disp = "Disponivel";
            } else {
                $disp = "Indisponivel/Emprestado";
            }
            return "O livro: $titulo_livro está: $disp";


        }
    }

?>