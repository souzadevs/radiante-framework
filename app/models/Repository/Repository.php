<?php

namespace App\Models\Repository;

use App\Models\ActiveRecord\Record;
use App\Models\Produto;
use App\Models\QueryObject\Criteria;
use App\Models\QueryObject\IQueryObject;
use Database\Transaction;
use Exception;

final class Repository
{
    private Record $activeRecord;

    function __construct(Record $activeRecord)
    {
        $this->activeRecord = $activeRecord;
    }

    public function load(IQueryObject $criteria)
    {
        $query = "SELECT * FROM {$this->activeRecord->getEntity()} WHERE" . $criteria->dump();
        $collection[] = null;

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

    public function update()
    {
    }

    public function delete()
    {
    }
}
