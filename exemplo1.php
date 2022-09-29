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
        public function setCPF($CPF){
            $this->CPF = $CPF;
        }
        public function getCpf(){
            return $this->CPF;
        }
        public function setNascimento($nascimento){
            $this->nascimento =  $nascimento;
        }
        public function getNascimento(){
            return $this->nascimento;
        }
        public function exibir(){
            return array(
                "nome"=>$this->getNome(),
                "CPF"=>$this->getCPF(),
                "nascimento"=>$this->getNascimento()
            );
        }
    }

        $pessoa = new Pessoa();
        $pessoa -> setNome("Davy");
        $pessoa -> setCPF("123.456.678-00");
        $pessoa -> setNascimento("02/06/2005");
 
        print_r($pessoa->exibir());

?>