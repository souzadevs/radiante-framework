<?php

namespace App\Controllers;

use \App\Renderization\Renderer;
use \App\Models\Produto;
use Rain\Tpl;
use Tools\ViewHelper;

class ProdutoController
{
    public function indexAction()
    {
        Tpl::configure(TPL_SET);

        $tpl = new Tpl();

        $tpl->assign('aside', ViewHelper::getTemplate('aside'));
        $tpl->assign('content', ViewHelper::getTemplate('content_produtos', true, [
            'produtos' => (new Produto)->load()
        ]));

        $tpl->draw('administracao');
    }

    public function storeAction()
    {
        /* Inserção ou atualização do produto no banco */
        $produto = (new Produto())->fromHaystack($_REQUEST);
        $produto->store();

        /* Preparando visualização da página */
        Tpl::configure(TPL_SET);
        
        $tpl = new Tpl();

        $tpl->assign('aside', ViewHelper::getTemplate('aside'));
        $tpl->assign('content', ViewHelper::getTemplate('content_produtos', true, [
            'produtos' => (new Produto)->load()
        ]));
        $tpl->assign('produto_salvo', true);

        $tpl->draw('administracao');
    }
}