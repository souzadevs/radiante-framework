<?php

namespace App\Models\QueryObject;

class Criteria implements IQueryObject
{
    private array $criterias;
    private array $properties;

    public function add($field, $comparator, $value, $logic = 'AND')
    {
        $this->criterias[] = [
            'campo'         => $field, 
            'comparador'    => $comparator, 
            'valor'         => $value, 
            'logica'        => $logic
        ];
    }

    public function setPropety($property, $value) {
        $this->properties[$property] = $value;
    }

    public function dump()
    {
        $query = null;

        foreach($this->criterias as $criteria) {
            if($query == null) {
                $query = 
                $criteria['campo']      . ' ' . 
                $criteria['comparador'] . ' ' .
                $criteria['valor']      . ' ';
            } else {
                $query .= 
                $criteria['logica']     . ' ' .
                $criteria['campo']      . ' ' .
                $criteria['comparador'] . ' ' .
                $criteria['valor']      . ' ';
            }
        }

        if(!empty($this->properties) && count($this->properties) > 0) {
            foreach($this->properties as $property => $value) {
                if($value != "") {
                    $query .= $property . ' ' . $value . ' ';
                }
            }
        }

        return ' '. trim($query);
    }

    public function getCriterias()
    {
        return $this->criterias;
    }
    
}