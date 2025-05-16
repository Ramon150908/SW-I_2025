<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo; // O PRIVATE serve para "proteger" o objeto, assim ele não pode ser acessado, podendo só ser alterado se passar pelo "operador do caixa"

        public function Sacar($valor){
            //$this->Saldo = $this->Saldo - $valor;
            if ($valor > $this->Saldo) {           //Esse IF serve para ver se o valor que for sacado é ou não maior do que o saldo, e se for, exibir uma mensagem de erro
                echo"Saldo insufuciente!!!";
            }else {
            $this->Saldo -= $valor;
            $Sal_Saq = "Operação realizada com sucesso! O seu saldo atual é:  R$" . $this->Saldo;
            return $Sal_Saq;
            }
        }
        public function Depositar($valor){
            $this->Saldo += $valor;
            $Sal_Dep = "Operação realizada com sucesso! O seu saldo atual é:  R$" . $this->Saldo;
            return $Sal_Dep;
        }
        public function ConsultarSaldo(){
            echo "<hr>";
            echo "NOME: " . $this->Nome . "<br>";
            echo "CPF: " . $this->Cpf . "<br>";
            echo "Saldo: " . $this->Saldo . "<br>";

        }


    }



?>