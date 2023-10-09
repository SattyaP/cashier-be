<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'user_id',
        'name_product',
        'sku',
        'image_product',
        'description',
        'amount',
        'qty',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function Users()
    {
        return $this->belongsTo(User::class);
    }
}
