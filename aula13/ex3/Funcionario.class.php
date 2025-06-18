<?php
    class Funcionario{
        private $Nome;
        private $Salario;

        public function __construct($nome,$salario){
            $this->Nome = $nome;
            $this->Salario = $salario;
        }
        public function getNome(){
            return $this->Nome;
        }
        public function getSalario(){
            return $this->Salario;
        }
        public function ExibirInformacoes(){
            $nome_funcionario = $this->getNome();
            $salario_funcionario = $this->getSalario();
            return "Funcionário: $nome_funcionario <br> Salário atual: $salario_funcionario R$" ;
        }
        public function AumentarSalario($porcentagem){
            $aumento = $this->salario * ($porcentagem / 100);
            $this->salario += $aumento;
        }
        }






?>