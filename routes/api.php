<?php

use App\Http\Controllers\Api\{
    ProductController,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/products' , [ProductController::class, 'index']);
Route::post('/products' , [ProductController::class, 'store']);
Route::put('/products/{sku}' , [ProductController::class, 'update']);
Route::put('/products/add/{sku}' , [ProductController::class, 'addQuantity']);
Route::put('/products/rem/{sku}' , [ProductController::class, 'remQuantity']);


