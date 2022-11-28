<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    protected $entity;

    public function __construct(Product $product)
    {
       $this->entity = $product;
    }

    public function getAllProducts()
    {
       $products = $this->entity->all();
       return $products;
    }

    public function createProduct($data)
    {
        $product = $data->all();
        $this->entity->create($product);
    }
}
