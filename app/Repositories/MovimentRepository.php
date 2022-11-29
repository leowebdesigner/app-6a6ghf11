<?php

namespace App\Repositories;

use App\Models\Moviment;

class MovimentRepository
{
    protected $entity;

    public function __construct(Moviment $moviment)
    {
       $this->entity = $moviment;
    }

    public function getAllMoviments()
    {
       $moviments = $this->entity->orderBy('product_sku', 'asc')->get();
       return $moviments;
    }

}
