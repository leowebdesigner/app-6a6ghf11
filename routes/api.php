<?php

use App\Http\Controllers\Api\{
    MovimentController,
    ProductController,
};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/products' , [ProductController::class, 'index']);
Route::post('/products' , [ProductController::class, 'store']);
Route::put('/products/{sku}' , [ProductController::class, 'update']);
Route::post('/products/add/{sku}' , [ProductController::class, 'addQuantity']);
Route::post('/products/rem/{sku}' , [ProductController::class, 'remQuantity']);

Route::get('/moviments' , [MovimentController::class, 'index']);


