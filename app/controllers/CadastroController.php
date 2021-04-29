<?php

namespace App\Controllers;

use Rain\Tpl;
use App\Models\QueryObject\Criteria;
use App\Models\Produto;
use Exception;

class CadastroController
{
    public function lista()
    {
        try{

            $criteria = new Criteria();
            $criteria->add('descricao', 'LIKE', "'%F%'");

            $produto = new Produto();
            
            $produtos = $produto->load();

            Tpl::configure([
                'cache_dir'     => 'views/cache',
                'tpl_dir'       => 'views/',
                'debug'         => true,
                'auto_escape'   => false
            ]);
    
            $tpl = new Tpl();
    
            $tpl->assign('header'   , file_get_contents('views/templates/header.html'));
            $tpl->assign('produtos' , $produtos);
            $tpl->assign('footer'   , '');
    
            $tpl->draw('cadastro');

        } 
        catch(Exception $e)
        {
            echo $e->getMessage();
        }
    }
}