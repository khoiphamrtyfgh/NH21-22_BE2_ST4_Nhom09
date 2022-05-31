<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;
    protected $primaryKey = 'detail_id';
    public function products()
    {
        return $this->belongsTo(Product::class, 'id');
    }
    public function payments()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
