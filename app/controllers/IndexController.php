<?php

namespace App\Controllers;

use \App\Models\Produto;
use App\Models\QueryObject\Criteria;
use App\Models\Repository\Repository;
use Rain\Tpl;
use Exception;

class IndexController
{
    public function indexAction()
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

        // Renderer::draw('cadastro', 
        // [
        //     'header' => Renderer::getContents('header')
        // ]);

        //------------------------------------------------------

        // $produto = Produto::fromHaystack($_REQUEST);
        
        // $produto->store();

        // var_dump($produto->getProperties());

        
        
        //------------------------------------------------------


        // Connection::open();

        // $csvParser = CSVParser::open('table.inf', ';');

        // $header = json_encode($csvParser->fetch());

        // while($row = $csvParser->fetch()) {
        //     var_dump("<br>" . json_encode($row));
        // }
        
        
        //------------------------------------------------------


        // Renderer::draw('form',
        // [
        //     'header' => Renderer::getContents('header'),
        //     'footer' => Renderer::getContents('footer')         
        // ]);
    }
}