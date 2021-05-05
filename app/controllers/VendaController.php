<?php

namespace App\Controllers;

use Rain\Tpl;
use Tools\ViewHelper;

class VendaController 
{
    public function indexAction()
    {
        //Coleta dos dados do banco

        //Construção do template
        Tpl::configure(TPL_SET);

        $tpl = new Tpl();

        $tpl->assign('aside',    ViewHelper::getTemplate('aside'));

        $tpl->assign('content',  ViewHelper::getTemplate('content_vendas', true, ['vendas' => null]));
        
        $tpl->draw('administracao');
    }

    public function storeAction()
    {
        //Armazenar venda no banco de dados usando Mapper
    }
}