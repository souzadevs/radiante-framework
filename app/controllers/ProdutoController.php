<?php

namespace App\Controllers;

use \App\Renderization\Renderer;
use \App\Models\Produto;
use Rain\Tpl;
use Tools\ViewHelper;

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

    public function listaAction()
    {
        $produto = new Produto();
        $produtos = $produto->load();

        Tpl::configure(TPL_SET);

        $tpl = new Tpl();
        
        $tpl->assign('header', ViewHelper::getTemplate('header'));
        $tpl->assign('produtos', $produtos);
        // $tpl->assign('baseUrl', TPL_SET['base_url']);

        $tpl->draw('lista');
    }

    public function cadastroAction()
    {
        Tpl::configure(TPL_SET);
        
        $tpl = new Tpl();

        $tpl->assign('header', ViewHelper::getTemplate('header'));

        $tpl->draw('cadastro');

    }
}