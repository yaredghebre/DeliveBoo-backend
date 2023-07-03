<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'address',
        'vat_number',
        'image',
        'description'
    ];

    // 1 to 1 -> user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // N to N -> types
    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    //1 to N -> products
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
