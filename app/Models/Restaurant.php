<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    protected $fillable = [
        'name',
        'address',
        'vat_number',
        'image',
        'description',
        'user_id'];

    public function type(){
        return $this->belongsTo(Type::class);
    }
}
