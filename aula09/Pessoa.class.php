<?php    
    class Pessoa{
    //Atributos da classe
        public $Nome;
        public $Peso;
        public $Altura;
    
        //Métodos
        public function MostrarDados(){
            echo"<hr>";
            echo "Nome da pessoa: " . $this->Nome . "<br>";
            echo "Peso da pessoa: " . $this->Peso . "<br>";
            echo "Altura da pessoa: " . $this->Altura . "<br>";
            echo"<hr>";


        }
    }




?>