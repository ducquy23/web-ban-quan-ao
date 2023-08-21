<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariation extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'product_variations';
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'stock_quantity'
    ];

}
