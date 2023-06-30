<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // N to 1 -> restaurants
    public function restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    // 1 to N -> categories
    public function categories() {
        return $this->hasMany(Category::class);
    }
    
    // N to N -> products
    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}
