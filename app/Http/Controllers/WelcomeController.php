<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
 use App\Models\Manufacture;

class WelcomeController extends Controller
{
    function getAllProduct(){
        $products = Product::all();
        return view('index2',['data'=>$products]);
    }
    function getAllProductById($id){
        $products = Product::find($id);
        return view('single',['data'=>$products]);
    }
    function getAllProductByManu($manu_id){
        $products = Product::where('manu_id',$manu_id)->get();
        return view('index',['data'=>$products]);
    }
}
