<?php

namespace App\Routes;

use Slim\App;
use App\Controllers\IndexController;


/* ROUTES */

$app = new App(
    [
        'settings' => [
            'displayErrorDetails' => true
        ]
    ]
);

$app->get('/', function(){
    $indexController = new IndexController();
    $indexController->indexAction();
});

$app->get('/loja', function(){
    echo "Loja!";
});

$app->get('/login', function(){
    echo "Login!";
});
