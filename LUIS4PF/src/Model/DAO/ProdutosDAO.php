<?php

namespace Aluno\Luis4pf\Model\DAO;

use Aluno\Luis4pf\Model\Entity\Produtos;

class ProdutosDAO{

    public function inserir(Produtos $p){
        try{
            $sql = "INSERT INTO `clientes`(`nome`, `descricao`, `valor`) VALUES (:nome, :descricao, :valor)";

        } catch(\Exception $e){
            return false;
        }
    }

    
    public function alterar(Produtos $p){
        try{
            $sql = "UPDATE `Produtos` SET `nome`=:nome,`descricao`=:descricao,`valor`=:valor WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM `produtos` WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultar(){
        try{
            $sql = "SELECT * FROM produtos";

        } catch(\Exception $e){
            return false;
        }
    }

    public function consultarPorId($id){
        try{
            $sql = "SELECT * FROM produtos WHERE id = :id";

        } catch(\Exception $e){
            return false;
        }
    }

}