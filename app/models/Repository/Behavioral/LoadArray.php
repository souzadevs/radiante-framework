<?php

namespace App\Models\Repository\Behavioral;

use App\Models\QueryObject\IQueryObject;
use App\Models\Repository\Behavioral\Loader;
use Database\Transaction;
use Exception;
use PDO;

class LoadArray extends Loader
{

    public function load(IQueryObject $criteria, $context)
    {
        // var_dump($context->getRecord()->getEntity());

        $query = "SELECT * FROM {$context->getRecord()->getEntity()} WHERE" . $criteria->dump();
        $collection = [];

        try 
        {
            $stmt = Transaction::getConnection()->prepare($query);

            $stmt->execute();

            while($array = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $collection[] = $array;
            }


            Transaction::close();

            return $collection != null ? $collection : FALSE;
        } 
        catch (Exception $e) 
        {
            Transaction::rollback();
            echo $e->getMessage();
            echo json_encode($e->getTrace());
            return false;
        }
    }
}