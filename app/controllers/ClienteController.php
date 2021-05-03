<?php

namespace App\Controllers;

use App\Models\Cliente;
use Rain\Tpl;
use Tools\ViewHelper;

class ClienteController 
{
    public function indexAction()
    {
        Tpl::configure(TPL_SET);

        $tpl = new Tpl();

        $tpl->assign('aside', ViewHelper::getTemplate('aside'));

        $tpl->assign('content', ViewHelper::getTemplate(
            'content_clientes', 
            true, 
            [
                'clientes' => (new Cliente())->load() 
            ]
        ));

        $tpl->draw('administracao');
    }

    public function storeAction()
    {
        /* Armazenamento do cliente no banco */
        $cliente = (new Cliente())->fromHaystack($_REQUEST);

        $cliente->store();


        /* Preparação do template */
        Tpl::configure(TPL_SET);

        $tpl = new Tpl();
        
        $tpl->assign('aside', ViewHelper::getTemplate('aside'));

        $tpl->assign('content', ViewHelper::getTemplate(
            'content_clientes', 
            true, 
            [
                'clientes' => (new Cliente())->load() 
            ]
        ));


        $tpl->assign('store_success', true);

        $tpl->draw('administracao');
        
    }
}