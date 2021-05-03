<?php

namespace App\Controllers;

use \App\Models\Produto;
use Rain\Tpl;
use Tools\ViewHelper;

class IndexController
{
    public function indexAction()
    {
        (new ProdutoController())->indexAction();
    }

    public function createAction()
    {
        
    }
}
