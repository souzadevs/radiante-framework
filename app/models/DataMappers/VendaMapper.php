<?php

namespace App\Models\DataMappers;

use App\Models\Cliente;
use App\Models\Produto;

class VendaMapper
{
    private Cliente $cliente;
    private Produto $produto;
    private int     $quantidade;
    private string  $datetime;

    public function __construct(Produto $produto, int $quantidade, Cliente $cliente, string $datetime = null)
    {
        $this->produto      = $produto;
        $this->quantidade   = $quantidade;
        $this->cliente      = $cliente;
        $this->datetime     = $datetime;
    }

    public function store()
    {
        
    }
}