<?php

namespace App\Controllers;

use \App\Models\Produto;
use App\Models\QueryObject\Criteria;
use App\Models\Repository\Repository;
use Rain\Tpl;
use Exception;
use Rain\Tpl\Plugin\PathReplace;
use Tools\ViewHelper;

class IndexController
{
    public function indexAction()
    {
        Tpl::configure(TPL_SET);

        $tpl = new Tpl();

        $tpl->assign('aside', ViewHelper::getTemplate('aside'));

        $tpl->assign('produtos', (new Produto)->load());

        $tpl->draw('data');
        
        


        // var_dump(ViewHelper::getTemplate('product_list', true, $produtos));

        // $admin = new Tpl();

        // $admin->assign('produtos', (new Produto)->load());
        // $admin->assign('header',          ViewHelper::getTemplate('header'));
        // $admin->assign('leftbar',         ViewHelper::getTemplate('left_bar'));


        // $admin->assign('resources_css',   ViewHelper::getTemplate('resources_css'));
        // $admin->assign('resources_js',    ViewHelper::getTemplate('resources_js'));
        


        // $productList = new Tpl();
        // $productList->assign('content', ViewHelper::getTemplate('product_list'));
        // $productList->draw('admin_default');

        // $admin->assign(
        //     'content',         
        //     $productList->drawString('oi')
        // );

        // Tpl::removePlugin('pathRelplace');

        // $admin->draw('admin_default');

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
