<?php

namespace Aluno\Luis4pf\Model\DAO;
class Conexao{
    public static function conectar(){
        return 
            new PDO("myslq:host=localhost; dbname=projetophp", "root", "");
    }
}