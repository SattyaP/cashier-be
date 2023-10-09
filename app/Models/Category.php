<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'user_id'
    ];

    public function Products()
    {
        return $this->hasMany(Product::class);
    }

    public function Users()
    {
        return $this->hasMany(Category::class);
    }
}
