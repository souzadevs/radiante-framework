<?php

namespace App\Renderization;

use App\Exceptions\ViewNotFoundException;

final class Renderer
{
 
    public static function draw($view, $yields = null)
    {
        if(file_exists("Views\\{$view}.html")) {
            $contents = file_get_contents("Views\\{$view}.html");
            if($yields) {
                foreach($yields as $yield => $content) {
                    $contents = str_replace("{{".$yield."}}", $content, $contents);
                }
            }
            print($contents);
        } else {
            throw new ViewNotFoundException("View {$view} não encontrado!");
        }
    }
    
    public static function getContents($view, $yields = null)
    {
        if(file_exists(ROOT . DS . "Views\\{$view}.html")) {
            $contents = file_get_contents("Views\\{$view}.html");
            if($yields) {
                foreach($yields as $yield => $content) {
                    $contents = str_replace("{{".$yield."}}", $content, $contents);
                }
            }
            return $contents;
        } else if (file_exists(ROOT . DS . "Views\\Parts\\{$view}.html")){
            $contents = file_get_contents(ROOT . DS . "Views\\Parts\\{$view}.html");
            if($yields) {
                foreach($yields as $yield => $content) {
                    $contents = str_replace("{{".$yield."}}", $content, $contents);
                }
            }
            return $contents;
        } else {
            throw new ViewNotFoundException('View {$view} não encontrado!');
        }
    }
}