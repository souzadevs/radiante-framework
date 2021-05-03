<?php 

namespace App\Models;

use Database\Transaction;
use App\Models\ActiveRecord\Record;

class Produto extends Record
{
    protected const ENTITY = 'produtos';

    function __construct()
    {
        $this->data = [
            'id'        => null,
            'descricao' => null,
            'preco'     => null,
            'estoque'   => null
        ];
    }

    public function getEntity()
    {
        return self::ENTITY;
    }

    /* NON-STATIC METHODS */

    /* STATIC METHODS */
    
}