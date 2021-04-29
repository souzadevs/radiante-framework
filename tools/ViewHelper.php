<?php

namespace Tools;

final class ViewHelper
{
    public static function getTemplate(string $view)
    {
        $file = ROOTS . "views/templates/{$view}.html";

        if(file_exists($file)) {
            return file_get_contents($file);
        } else {
            return false;
        }
    }
}