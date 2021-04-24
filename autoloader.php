<?php

spl_autoload_register("loadClass");

function loadClass($class) 
{   
    $file = ROOT . DS . $class . ".php";
    if(file_exists(strtolower($file))) {
        require_once($file);
    }
}
