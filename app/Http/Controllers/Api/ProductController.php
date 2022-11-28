<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Http\Resources\ProductResource;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $repository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function index()
    {
        $products = $this->repository->getAllProducts();
        return ProductResource::collection($products);
    }

    public function store(ProductFormRequest $request)
    {
        $this->repository->createProduct($request);
        return response()->json('create success', 201);
    }

    public function update(ProductFormRequest $request, $sku)
    {
        $this->repository->updateProduct($request, $sku);
        return response()->json('updated', 200);
    }

    public function addQuantity(Request $request, $sku)
    {
        $this->repository->sumQuantity($request, $sku);
        return response()->json('add quantity success', 200);
    }

    public function remQuantity(Request $request, $sku)
    {
        $quantity = $this->repository->removeQuantity($request, $sku);
        return $quantity;
    }
}
