<?php

namespace App\Controllers;

use \App\Renderization\Renderer;
use \App\Models\Produto;

class ProdutoController
{
    public function storeAction()
    {
        $produto = Produto::fromHaystack($_REQUEST);
        
        $produto->store();

        // Renderer::draw('cadastro', 
        // [
        //     'header' => Renderer::getContents('header')
        // ]);
    }
}