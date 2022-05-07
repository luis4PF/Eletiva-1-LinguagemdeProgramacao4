<?php

    require_once __DIR__."/vendor/autoload.php";

    //aqui a gente recupera oque o usuario digitou 
    //e qual o metodo http ele utilizou;

    $method = $_SERVER['REQUEST_METHOD'];
    $path = $_SERVER['PATH_INFO'];

    //instanciar classe Router;
    $router = new \Aluno\Luis4pf\Router($method, $path);

    //ADICIONAR AS ROTAS VALIDAS ABAIXO

    $router->get("/ola-mundo", function(){
        return "Olá Mundo";
    });    

    $router->get('/exemplo', "Aluno\Luis4pf\Controller\ExercicioController::exibir");

    $router->post("/exemplo-resultado", "Aluno\Luis4pf\Controller\ExercicioController::exibirResultado");


    //ADICIONAR AS ROTAS VALIDAS ACIMA

    $result = $router->handler();

    if(!$result){
        http_response_code(404);
        echo "Página não encontrada";
        die();
    }
    echo $result($router->getParams());

    //view + terminal // php -S localhost:8000 -t public/ para executar 
    //localhost:8000/ola-mundo // pesquisar na url do google