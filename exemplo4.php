<?php

    class Pessoa{

        public $nome;//Atributo

        public function falar(){//Método

            return "O meu nome é ".$this->nome;

        }
    
    
    
    
    }
$juia = new Pessoa();
$juia->nome = "Júlia Negresca Santana <br>";
echo $juia->falar();

$davy = new Pessoa();
$davy->nome = "Tomas Turbando Silva";
echo $davy->falar();



?>