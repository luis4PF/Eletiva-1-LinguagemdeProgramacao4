<?php

namespace Aluno\Luis4pf\Model\DAO;

use Aluno\Luis4pf\Model\Entity\Clientes;

class ClientesDAO{

    public function inserir(Clientes $c){
        try{
            $sql = "INSERT INTO `clientes`(`nome`, `e-mail`, `idade`) VALUES (:nome, :email, :idade)";

        } catch(\Exception $e){
            return false;
        }
    }

    
    public function alterar(Clientes $c){
        try{
            $sql = "UPDATE `clientes` SET `nome`=:nome,`e-mail`=:email,`idade`=:idade WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `clientes` WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM clientes";

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM clientes WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

}