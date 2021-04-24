<?php

namespace App\Models\ActiveRecord;

use Database\Connection;
use Database\Log\Behavioral\LoggerCSV;
use Database\Log\Behavioral\LoggerJSON;
use Database\Transaction;
use Database\Log\Behavioral\LoggerTXT;
use Database\Log\Behavioral\LoggerXML;
use PDOException;
use Exception;
use PDO;

abstract class Record
{
    protected $data = [];

    function __set($prop, $value)
    {
        $this->data[$prop] = $value;
    }

    function __get($prop)
    {
        switch ($prop) {
            case "ENTITY":
                return $this->getEntity();
                break;

            case "data":
                return $this->getData();
                break;

            default:
                return $this->data[$prop];
                break;
        }
    }

    function __isset($prop)
    {
        return $this->data[$prop];
    }

    function __unset($prop)
    {
        $this->data[$prop] = null;
    }

    function __call($method, $params)
    {
        if (method_exists($this, $method)) {
            call_user_func($method, $params);
        }
    }

    function __clone()
    {
        $this->data['id'] = null;
    }

    public function store()
    {
        if (!empty($this->id)) {

            //BUILD QUERY
            $query = "UPDATE {$this->getEntity()} SET ";
            $set = [];

            foreach ($this->data as $column => $value) {
                if ($column !== 'id') {
                    $set[] = "{$column} = :{$column}";
                }
            }

            $query .= implode(", ", $set);
            $query .= " WHERE id = :id";
            //END BUILD QUERY

            // TRANSACTION
            try {
                $connection = Transaction::getConnection();

                $stmt = $connection->prepare($query);

                //PREPARE STATEMENT (ANTI SQL-INJECTION);
                foreach ($this->data as $column => $value) {
                    $stmt->bindValue(":" . $column, $value);
                }

                $stmt->execute();


                //LOG
                // Transaction::setLogger(new LoggerTXT(ROOT . DS . 'App\\Database\\Realesed\\Log.txt'));
                // Transaction::log('Mensagem');

            } catch (PDOException $e) {
                echo $e->getMessage();
                Transaction::rollback();
            } catch (Exception $e) {
                echo $e->getMessage();
                Transaction::rollback();
            } finally {
                Transaction::close();
            }
        } else {

            //BUILD QUERY
            $query = "INSERT INTO {$this->getEntity()} (params) VALUES (values)";

            $query = str_replace("(params)", "("    . implode(", ", array_keys($this->data))    . ")", $query);
            $query = str_replace("(values)", "(:"   . implode(", :", array_keys($this->data))     . ")", $query);
            $query = str_replace(":id, ", "", $query);
            $query = str_replace("id, ", "", $query);

            try {
                $stmt = Transaction::getConnection()->prepare($query);

                foreach ($this->data as $field => $value) {
                    if ($field !== "id") {
                        $stmt->bindValue(":{$field}", $value);
                    }
                }

                $stmt->execute();
                //LOG
                date_default_timezone_set('America/Sao_Paulo');

                Transaction::setLogger(new LoggerCSV('Log'));
                Transaction::log($query);
            } catch (PDOException $e) {
                echo $e->getMessage();
                Transaction::rollback();
            } catch (Exception $e) {
                echo $e->getMessage();
            } finally {
                Transaction::close();
            }
        }
    }

    public function load()
    {
        $query = "SELECT * FROM {$this->getEntity()}";

        try
        {
            $stmt = Transaction::getConnection()->prepare($query);

            $stmt->execute();

            $collection = [];

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $collection[] = $row;
            }

            Transaction::close();

            return $collection;

        }
        catch(Exception $e)
        {
            echo $e->getMessage();
            Transaction::rollback();
        }
    }

    public function delete()
    {
    }

    public static function find($id)
    {
    }

    protected function getEntity()
    {
        $class = get_class($this);
        return $class::ENTITY;
    }
}
