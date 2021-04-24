<?php

namespace App\Models\Repository\Behavioral;

use App\Models\ActiveRecord\Record;
use App\Models\QueryObject\IQueryObject;

abstract class Loader
{
    protected Record $activeRecord;
    
    public function load(IQueryObject $criteria, $context){}
}