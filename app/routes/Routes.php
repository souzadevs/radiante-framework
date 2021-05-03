<?php

namespace App\Routes;

use App\Controllers\ClienteController;
use Slim\App;
use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\ProdutoController;

/* ROUTES */

$app = new App(
    [
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]
);

$app->get('/',                  function(){
    $controller = new IndexController();
    $controller->indexAction();
});

$app->get('/produtos',          function(){
    $produtoController = new ProdutoController();
    $produtoController->indexAction();
});

$app->post('/produto/novo',     function(){
    (new ProdutoController())->storeAction();
});

$app->get('/clientes',          function(){
    (new ClienteController())->indexAction();
});

$app->post('/cliente/novo',     function(){
    (new ClienteController())->storeAction();
});

$app->get('/login',             function(){
    $loginController = new LoginController();
    $loginController->loginFormAction();
});
