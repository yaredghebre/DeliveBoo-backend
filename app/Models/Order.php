<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // N to N -> orders
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

    protected $fillable = [
        'total',
        'status',
        'date_time',
        'customer_name_surname',
        'customer_address',
        'customer_notes',
        'customer_email'
    ];
}
