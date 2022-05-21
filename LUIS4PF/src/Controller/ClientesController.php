<?php

namespace Aluno\Luis4pf\Controller;

use Aluno\Luis4pf\Model\DAO\ClientesDAO;
use Aluno\Luis4pf\Model\Entity\Clientes;

class ClienteController{
    public static function abrirFormularioInserir(){
        require_once "../src/View/Inserir_cliente.php";
    }
    public static function inserirCliente(){
        $cliente = new Clientes();
        $cliente->setEmail($_POST['email']);
        $cliente->setIdade($_POST['idade']);
        $cliente->setNome($_POST['nome']);
        $dao = new ClientesDAO();
        if ($dao->inserir($cliente)){
            return "Inserido com sucesso!";
        } else{
            return "Erro ao inserir";
        }
    }

}