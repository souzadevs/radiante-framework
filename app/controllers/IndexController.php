<?php

namespace App\Controllers;

use \App\Models\Produto;
use Rain\Tpl;
use Tools\ViewHelper;

class IndexController
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

    public function createAction()
    {
        $produto = Produto::fromHaystack($_REQUEST);

        $produto->store();


        $tpl = new Tpl();

        $tpl->assign('aside', ViewHelper::getTemplate('aside'));

        $tpl->assign('content', ViewHelper::getTemplate('content_produtos', true, [
            'produtos' => (new Produto)->load()
        ]));

        $tpl->assign('produto_salvo', true);

        $tpl->draw('administracao');


    }
}
