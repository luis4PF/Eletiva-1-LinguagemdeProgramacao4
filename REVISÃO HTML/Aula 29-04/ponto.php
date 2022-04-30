<?php

class Ponto{

    private $x;
    private $y;
    private static $contador = 0;

    public function calcularDistancia(Ponto $p){
        $valorX = pow(($p->getX()- $this->x), 2);
        $valorY = pow(($p->gety()- $this->y), 2);
        return sqrt($valorX + $valorY);
    }

    public function calcularDistancia2($x2, $y2){
        $valorX = pow(($x2- $this->x), 2);
        $valorY = pow(($y2- $this->y), 2);
        return sqrt($valorX + $valorY);
    }

    public function calcularDistancia3($x1, $x2, $y1, $y2){
        $valorX = pow(($x2- $x1), 2);
        $valorY = pow(($y2- $y1), 2);
        return sqrt($valorX + $valorY);
    }

    private static function setContador(){
        self::$contador++;
    }

    public static function getContador(){
        return self::$contador; //para acessar métodos da classe, utiliza o "self";
    }

    public function __construct($x, $y)
    {
        $this->setX($x);
        $this->setY($y);
        self::setContador();
    }

    public function getx(){
        return $this->x;
    }

    public function setx($x){
        $this->x = $x;
    }

    public function gety(){
        return $this->y;
    }

    public function sety($y){
        $this->y = $y;
    }
}

?>