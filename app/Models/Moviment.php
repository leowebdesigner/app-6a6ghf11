<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moviment extends Model
{
    use HasFactory;

    protected $fillable = ['product_sku','qtd','status'];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'sku');
    }
}
