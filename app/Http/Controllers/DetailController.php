<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Helper\CartHelper;

class DetailController extends Controller
{
    public function view(){
        // $cart = Cart::All();
        session(['cart'=>$this->items]);
        return view('checkout',['cart'=>$cart]);
    }
}
