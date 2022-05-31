<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function product()
    {
        // return $this->hasMany(Product::class,'manu_id','id');
        return $this->belongsTo(Product::class,'product_id','id');
    }
}

