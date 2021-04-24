<?php

/* FRONT CONTROLLER */


/* CONSTANTS */
define("DS"     , DIRECTORY_SEPARATOR);
define("ROOT"   , __DIR__);
define("ROOTS"  , ROOT . DS); //ROOT WITH DIRECTORY SEPARATOR (FOR EASY CALLS)

/* PRESETS */
date_default_timezone_set('America/Sao_Paulo'); //TIMEZONE

/* REQUIRES */
require_once("vendor/autoload.php");     // VENDOR AUTOLOADER
require_once("autoloader.php");          // HOME AUTOLOADER
require_once("app\\routes\\Routes.php"); // ROUTES

/* GO! */
$app->run();


/* TESTES */

// $criteria = new Criteria();
// $criteria->add('descricao', 'LIKE', "'%F%'");

// $repository = new Repository(new Produto());

// $produtos = $repository->load($criteria);
// $i = 0;


// try
// {
//     Kernel::go();
// } 
// catch (ActionNotFoundException $e) 
// {
//     print_r($e);
// } 
// catch (ControllerNotFoundException $e) 
// {
//     print_r($e);
// } 
// finally
// {
//     // Visualização de página não encontrada
// }

