<?php

namespace Database;

use Database\Log\Behavioral\LoggerBehavioral;
use Database\Log\Behavioral\Write\WriteTXT;

class Transaction
{
    private static $connection;

    private static LoggerBehavioral $loggerPerformed;

    public static function open()
    {
        if(empty(self::$connection)) {
            self::$connection = Connection::open();
            self::$connection->beginTransaction();
        } else {
            self::$connection->beginTransaction();
        }

        return self::$connection;
    }

    public static function rollback()
    {
        if(!empty(self::$connection)) {
            self::$connection->rollBack();
            self::$connection = null;
        }
    }

    public static function close()
    {
        if(!empty(self::$connection)) {
            self::$connection->commit();
            self::$connection = null;
        }
    }

    public static function getConnection()
    {
        self::open();
        return self::$connection;
    }

    public static function log($message)
    {
        self::$loggerPerformed->write($message);
    }

    public static function setLogger(LoggerBehavioral $logger)
    {
        self::$loggerPerformed = $logger;
    }
}
