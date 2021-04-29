<?php

namespace App\Routes;

use Slim\App;
use App\Controllers\IndexController;
use App\Controllers\ProdutoController;

/* ROUTES */

$app = new App(
    [
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]
);

$app->get('/', function(){
    $controller = new IndexController();
    $controller->indexAction();
});

$app->get('/produto/cadastro', function(){
    $produtoController = new ProdutoController();
    $produtoController->listaAction();
});

$app->get('/produto/lista', function(){
    $produtoController = new ProdutoController();
    $produtoController->cadastroAction();
});

$app->get('/login', function(){
    echo "Login!";
});
