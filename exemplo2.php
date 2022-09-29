<?php

    class Documentos{

        private $numero;

        public function getNumero(){

            return $this->numero;

        }

        public function setnumero($numero){

            $numero = Documento::validarCPF($numero);

            if(resultado == false){

                throw new Exception("CPF informado não é valido.",1);

            }

            $this->numero = $numero
        }
    }


?>