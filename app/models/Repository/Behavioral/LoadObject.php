<?php

namespace App\Models\Repository\Behavioral;

use App\Models\QueryObject\IQueryObject;
use App\Models\Repository\Behavioral\Loader;
use Database\Transaction;
use Exception;

class LoadObject implements Loader
{
    public function load(IQueryObject $criteria)
    {
        $query = "SELECT * FROM {$this->activeRecord->getEntity()} WHERE" . $criteria->dump();
        $collection[] = null;

        // echo $query;
        // echo get_class($this->activeRecord);

        try 
        {
            $stmt = Transaction::getConnection()->prepare($query);

            $stmt->execute();

            while($object = $stmt->fetchObject()) {
                $collection[] = $object;
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