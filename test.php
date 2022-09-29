<?php

    interface Veiculo{
        public function acelerar($velocidade);
        public function frenar($velocidade);
        public function trocarmarcha($marcha);
    }

    class Civic implements Veiculo
    {
        public function acelerar($velocidade)
        {
            echo "Veiculo acelerou até". $velocidade. "km/h";
        }
        public function frenar($velocidade)
        {
            echo "Veiculo frenou até". $velocidade. "km/h";
        }
        public function trocarmarcha($marcha)
        {
            echo "Veiculo acelerou até". $marcha;
        }
    }

?>