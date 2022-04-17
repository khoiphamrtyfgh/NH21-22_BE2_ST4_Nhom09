<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacture extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Product::class,'manu_id','id');
    }
}
