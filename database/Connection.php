<?php

namespace Database;

use App\Exceptions\DatabaseIniNotFoundException;
use App\Exceptions\DatabaseIniNotReadeble;
use PDO;

final class Connection
{
    private static $data;
    private static $ini_file;

    private function __construct()
    {
    }

    public static function open($ini = 'default')
    {
        self::$ini_file = $ini;

        try 
        {
            $data = self::getConfig();
            switch ($data['sgbd']) {
                case 'mysql':
                    return new PDO($data['sgbd'] . ":dbname=" . $data['database'] . ";host=" . $data['address'] . ";port=" . $data['port'], $data['username'], $data['password']);
                    // self::$connection = new PDO('mysql:dbname=radiante_framework;host=localhost;port=3306', "root", "root");
                    break;
                default:
                    break;
            }
        } 
        catch(DatabaseIniNotFoundException $e) 
        {
            echo get_class($e) . "<br>";
            echo $e->getMessage();
            echo $e->getTrace();
            return false;
        }   
    }

    private static function getConfig()
    {
        $file = ROOT . DS . 'Database' . DS . 'Configurations' . DS . self::$ini_file . ".ini";
        
        if (file_exists($file)) {
            if(is_readable($file)) {
                self::$data = parse_ini_file($file);
            } else {
                throw new DatabaseIniNotReadeble();
            }
            return self::$data;
        } else {
            throw new DatabaseIniNotFoundException();
        }
    }
}
