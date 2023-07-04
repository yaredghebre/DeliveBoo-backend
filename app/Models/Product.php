<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // N to 1 -> restaurants
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    // N to 1 -> categories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // N to N -> products
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    protected $fillable = [
        'name',
        'restaurant_id',
        'category_id',
        'image',
        'price',
        'description',
        'visible'
    ];
}
