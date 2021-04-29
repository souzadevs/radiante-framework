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

        Tpl::configure([
            'cache_dir'     => 'views/cache',
            'tpl_dir'       => 'views/',
            'auto_escape'   => false,
            'degbuf'        => true
        ]);

        $rainTpl = new Tpl();

        $rainTpl->draw('index');

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