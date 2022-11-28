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

    public function updateProduct($request, $sku)
    {
        $data = $this->entity->where('sku', $sku);
        $product = $request->all();
        $data->update($product);
    }

    public function sumQuantity($request, $sku)
    {
        $sum = $request->qtd;
        $data = $this->entity->where('sku', $sku)->first();
        $data->qtd = $data->qtd + $sum;
        $data->save();
    }

    public function removeQuantity($request, $sku)
    {
        $remove = $request->qtd;
        $data = $this->entity->where('sku', $sku)->first();
        $data->qtd = $data->qtd - $remove;

        if($data->qtd >= 0){
            $data->save();
            return response()->json('remove quantity success', 200);
        } else {
            return abort(401, "Não foi possível remover item do estoque, quantidade de remoção maior que a do estoque");
        }
    }
}
