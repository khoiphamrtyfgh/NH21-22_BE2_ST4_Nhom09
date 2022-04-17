<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function manufacture(){
     return $this->belongsTo(Manufacture::class,'manu_id','manu_id');
    }
  
      
    public function protype(){
      // return $this->belongsTo(Protype::class, 'manu_id');
      return $this->belongsTo(Protype::class,'type_id','type_id');
  }
 
  
}
