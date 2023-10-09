<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'pro_name',
        'product_image',
        'product_price',
        'product_desc',
        'product_quantity',
        // 'category_id',
        'seller_id',
    ];
    
        
}
