<?php

namespace Tools;

use Rain\Tpl;
use Rain\Tpl\Plugin\PathReplace;

final class ViewHelper
{
    public static function getTemplate(string $view, bool $isTpl = false, array $vars = null)
    {
        $file = ROOTS . "views/templates/{$view}.html";

        if (!$isTpl) {

            if (file_exists($file)) {
                return file_get_contents($file);
            } else {
                return false;
            }

        } else {
            if ($vars) {
                Tpl::configure(TPL_SET);

                

                // Tpl::registerPlugin(new PathReplace());
                

                $tpl = new Tpl();

                foreach ($vars as $varKey => $value) {
                    $tpl->assign($varKey, $value);
                }

                $contents = '';
                
                if (file_exists($file)) {
                    $contents =  file_get_contents($file);
                } else {
                    return false;
                }

                return $tpl->drawString($contents, true);
            }
        }
    }
}
