<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Book;

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
  public function comments()
    {
        // return $this->belongsTo(Product::class,'product_id','id');
        // return $this->hasMany(Comment::class);
        return $this->hasMany(Comment::class,'id','product_id');
    }
    public function book(){
        return $this->belongsTo(Book::class,'id','product_id');
       }
 
  
}
