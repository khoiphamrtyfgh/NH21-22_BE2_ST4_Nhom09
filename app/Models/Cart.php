<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function user()
    {
        // return $this->hasMany(Product::class,'manu_id','id');
        return $this->belongsTo(User::class,'user_id','id');
    }
}
