<?php
    class Pessoa{
        private $nome;
        private $CPF;
        private $nascimento;
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setCPF(){
            return $this-> $CPF;
        }
        public function getCpf($CPF){
            $this->CPF = $CPF;
        }
        public function setNascimento(){
            return $this-> $nascimento;
        }
        public function getNascimento($nascimento){
            $this->nascimento = $nascimento;
        }
    }

        $Pessoa = new Pessoa();
        $Pessoa -> setNome("Davy");
        $Pessoa -> setCPF("123.456.678-00");
        $Pessoa -> setNascimento("4892");
 
        print-r($pessoa->exibir());

?>