<?php

namespace App\Models;

use App\Models\ActiveRecord\Record;

class Cliente extends Record
{
    protected const ENTITY = 'clientes';

    public function __construct()
    {
        $this->data = [
            'nome'  => null,
            'cpf'   => null,
            'email' => null,
            'senha' => null
        ];
    }
}

