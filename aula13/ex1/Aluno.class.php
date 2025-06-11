<?php
    class Aluno{
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nome,$n1,$n2){
            $this->Nome = $nome;
            $this->Nota1 = $n1;
            $this->Nota2 = $n2;
        }
        public function getNome(){
            return $this->Nome;
        }
        public function getNota1(){
            return $this->Nota1;
        }
        public function getNota2(){
            return $this->Nota2;
        }

        public function Media($n1,$n2){
            $Media = ($n1 + $n2)/2;
            return $Media;
        }
        public function VerificarSituacao($Media){

            if ($Media >= 7) {
                return "<b style = 'color:green';>APROVADO<b/>";
                //APROVADO1
            }else {
                return "<b style = 'color:red';>REPROVADO<b/>"; 
                //REPROVADO
            }
            
        }

    }


?>