<?php

    class Matricial extends Impressora{

        private $numAgulhas;
        private $imprimeVias;

        public function __construct($marca, $modelo, $numAgulhas, $colorida, $imprimeVias, $peso)
        {
            $this -> setMarca($marca);
            $this -> setModelo($modelo);
            $this -> setnumAgulhas($numAgulhas);
            $this -> setColorida($colorida);
            $this -> setimprimeVias($imprimeVias);
            $this -> setPeso($peso);
        }

        public function getnumAgulhas(){
            return $this -> numAgulhas;
        }
    
        public function setnumAgulhas($numAgulhas){
            $this -> numAgulhas = $numAgulhas;
        }

        public function getimprimeVias(){
            return $this -> imprimeVias;
        }
    
        public function setimprimeVias($imprimeVias){
            $this -> imprimeVias = $imprimeVias;
        }

    }
?>