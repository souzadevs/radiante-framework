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
         
    }

    public function listaAction()
    {
        Tpl::configure([
            'cache_dir'     => 'views/cache',
            'tpl_dir'       => 'views/',
            'auto_escape'   => false,
            'debug'        => false
        ]);
        
        $produtos = (new Produto())->load();

        $admin = new Tpl();

        $admin->assign('header',            ViewHelper::getTemplate('header'));
        $admin->assign('leftbar',           ViewHelper::getTemplate('left_bar'));
        $admin->assign('resources_css',     ViewHelper::getTemplate('resources_css'));
        $admin->assign('resources_js',      ViewHelper::getTemplate('resources_js'));
        $admin->assign('test',              true);
        $admin->assign(
            'content',         
            ViewHelper::getTemplate(
                'product_list', true, [
                    'produtos' => $produtos
                ])
        );

        $admin->draw('admin_default');
    }

    public function cadastroAction()
    {
        Tpl::configure(TPL_SET);
        
        $tpl = new Tpl();

        $tpl->assign('header', ViewHelper::getTemplate('header'));

        $tpl->draw('cadastro');

    }
}