<?php

namespace App\Controllers;

use Rain\Tpl;

class LoginController
{
    public function loginFormAction()
    {
        Tpl::configure(TPL_SET);
        
        $tpl = new Tpl();

        $tpl->draw('login');
    }
}