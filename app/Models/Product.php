<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'products';
    protected $fillable = [
      'name',
        'price',
        'image_url',
        'view',
        'description_short',
        'description',
        'category_id'
    ];
}
