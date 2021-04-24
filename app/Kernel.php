<?php

namespace App;

use App\Exceptions\ActionNotFoundException;
use App\Exceptions\ControllerNotFoundException;

class Kernel
{
    private static $action, $controller;

    private static function getRoute()
    {
        self::$action       = isset($_REQUEST['action'])        ? $_REQUEST['action']        : "index";
        self::$controller   = isset($_REQUEST['controller'])    ? $_REQUEST['controller']    : "Index";
        // var_dump(self::$controller);
    }

    public static function go()
    {
        self::getRoute();
        $action     = self::$action     . "Action";
        $controller = self::$controller . "Controller";
        
        if(class_exists("App\\Controllers\\" . trim($controller))) {
            $controller = "App\\Controllers\\" . trim($controller);
            if(method_exists(new $controller, $action)) {

                $oController = new $controller();
                $oController->$action();

            } else {
                throw new ActionNotFoundException("Action " . $action . " não encontrado!");
            }
        } else {
            throw new ControllerNotFoundException("Controller " . $controller . " não encontrado!");
        }
    }
}

?>