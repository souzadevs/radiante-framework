<?php

namespace App\Models\Repository;

use App\Models\ActiveRecord\Record;
use App\Models\Produto;
use App\Models\QueryObject\Criteria;
use App\Models\QueryObject\IQueryObject;
use Database\Transaction;
use Exception;
use App\Models\Repository\Behavioral\Loader;

final class Repository
{
    private Record $activeRecord;
    private Loader $performedLoader;

    function __construct(Record $activeRecord)
    {
        $this->activeRecord = $activeRecord;
    }

    public function load(IQueryObject $criteria)
    {
        return $this->performedLoader->load($criteria, $this);
    }

    public function update()
    {
    }

    public function delete()
    {
    }

    public function setLoader(Loader $loader)
    {
        $this->performedLoader = $loader;
    }

    public function getRecord()
    {
        return $this->activeRecord;
    }
}
