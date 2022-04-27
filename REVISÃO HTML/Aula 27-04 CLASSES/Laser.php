<?php

    class Matricial extends Impressora{

        private $frenteVerso;
        private $capacidadeToner;

        public function __construct($marca, $modelo, $frenteVerso, $colorida, $capacidadeToner, $peso)
        {
            $this -> setMarca($marca);
            $this -> setModelo($modelo);
            $this -> setcapacidadeToner($capacidadeToner);
            $this -> setColorida($colorida);
            $this -> setcapacidadeToner($capacidadeToner);
            $this -> setPeso($peso);
        }

        public function getcapacidadeToner(){
            return $this -> capacidadeToner;
        }
    
        public function setcapacidadeToner($capacidadeToner){
            $this -> capacidadeToner = $capacidadeToner;
        }

        public function getfrenteVerso(){
            return $this -> frenteVerso;
        }
    
        public function setfrenteVerso($frenteVerso){
            $this -> frenteVerso = $frenteVerso;
        }
    }
?>