<?php

namespace App\Models;

use App\Models\ActiveRecord\Record;

class Venda extends Record
{
    protected const ENTITY = 'vendas';

    public function __construct()
    {
        $this->data = [
            'id'            => null,
            'cliente'       => null,
            'produto'       => null,
            'quantidade'    => null,
            'datetime'      => null
        ];
    }
}
