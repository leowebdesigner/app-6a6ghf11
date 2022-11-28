<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Exception;
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

    public function store(Request $request)
    {
        $this->repository->createProduct($request);
        return response()->json('success', 201);
    }

    public function update(Request $request, $sku)
    {
        $this->repository->updateProduct($request, $sku);
        return response()->json('updated', 200);
    }

}
