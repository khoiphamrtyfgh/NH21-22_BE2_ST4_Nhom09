<?php

namespace App\Http\Controllers;

use Illuminate\View\View\simplePaginate;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
use App\Models\Comment;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\User;
use App\Models\Admin;
use Psy\Readline\Hoa\Console;
use Illuminate\Support\Facades\DB;



class WelcomeController extends Controller
{

  function web($name, Request $request)
  {
    if ($name == 'index') {
      $products = Product::limit(10, 10)->where('quantity', '>', 0)->orderBy('created_at', 'desc')->get();
      // SELECT * FROM `products` ORDER BY `created_at` DESC LIMIT 10,10

      $type = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=1 limit 5');
      $type1 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=2 limit 5');
      $type2 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=4 limit 5 ');



      // $products = Product::paginate(4);
      $protypes = Protype::all();
      //    $products = Cart::content();
      //  return view($name,compact('products'))->with('i',(request()->input('page',1)-1)*2);
      return view($name, ['data' => $products])->with('protypes', $protypes)->with('type', $type)->with('type1', $type1)->with('type2', $type2);

      //    ->with('i',(request()->input('page',1)-1)*4)
      //    ->with('product',$product);

    }
    if ($name == 'products') {

      $products = Product::all();

      return view($name, ['data' => $products]);
    }


    if ($name == 'result') {




      //  if($request->old('searchCol')== '0')
      //  {
      //    $products = Product::where('name','like','%'.$request->old('keyword').'%' )->paginate(3);
      //  }
      //  else{
      //     $products = Product::where('name','like','%'.$request->old('keyword').'%')->where('type_id' ,'=', $request->old('searchCol'))->paginate(3);
      //  }

      $request->flash();
      $product = Product::all();
      $protypes = Protype::all();
      $manufactures = Manufacture::all();
      $request->old('keyword');
      $request->old('type_id');

      // $user = User::find()
      $products = Product::where('name', 'like', '%' . $request->old('keyword') . '%')->where('quantity', '>', 0)->paginate(3);
      //   $products = Product::where('name','like','%'+$tukho+'%')->get();
      return view('result', ['data' => $products])->with('i', (request()->input('page', 1) - 1) * 4)->with('protypes', $protypes)
        ->with('product', $product)
        ->with('manufactures', $manufactures);



      // $products = Product::where('name','like','%iphone%')->get();                           

      //   $products = Product::where('name','like','%'+$tukho+'%')->get();
      // $products = Product::all()->where('name','like','Iphone')->get();          

    }
    if ($name == 'productype') {
      $protypes = Protype::all();
      return view('productype')->with('protypes', $protypes);
    } else {
      return view($name);
    }
    return view($name);
  }

  function getAllProducts()
  {
    $products = Product::all();
    return view('index', ['data' => $products]);
  }
  function getSearch(Request $request)
  {
    $request->flash();
    $product = Product::all();
    $protypes = Protype::all();
    $manufactures = Manufacture::all();
    $request->old('keyword');
    $request->old('type_id');
    if ($request->old('searchCol') == '0') {
      $products = Product::where('name', 'like', '%' . $request->old('keyword') . '%')->paginate(3);
    } else {
      $products = Product::where('name', 'like', '%' . $request->old('keyword') . '%')->where('type_id', '=', $request->old('searchCol'))->paginate(3);
    }

    //   $products = Product::where('name','like','%'+$tukho+'%')->get();
    // $products = Product::all()->where('name','like','Iphone')->get();

    return view('result', ['data' => $products])->with('i', (request()->input('page', 1) - 1) * 4)->with('protypes', $protypes)
      ->with('product', $product)
      ->with('manufactures', $manufactures);
  }
  function index()
  {
    $products = Product::limit(10, 10)->where('quantity', '>', 0)->orderBy('created_at', 'desc')->get();
    // $products = Product::limit(8)->where('quantity', '>', 0)->get();

    $type = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=1 limit 5');
    $type1 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=2 limit 5');
    $type2 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=3 limit 5 ');
    $protypes = Protype::all();
    return view('index', ['data' => $products])->with('protypes', $protypes)->with('type', $type)->with('type1', $type1)->with('type2', $type2);
  }
  // demo

  function getAllProduct()
  {
    $products = Product::all();
    return view('checkout', ['data' => $products]);
  }
  function getAllProductById($id)
  {
    $products = Product::find($id);
    return view('single', ['data' => $products]);
  }
  function getAllProductByManu($manu_id)
  {
    $products = Product::where('manu_id', $manu_id)->get();
    return view('index', ['data' => $products]);
  }
  // admin
  function admin($name,  Request $request)
  {
    $request->flash();
    $admin = Admin::all();
    $products = Product::all();
    $protypes = Protype::all();
    $manufactures = Manufacture::all();
    $users = User::all();

    if ($admin[0]->check_login == 1) {
      if ($name == 'index') {
        return view('admin.index', ['data' => $admin]);
      }
      if ($name == 'products') {
        return view('admin.products', ['data' => $products]);
      }
      if ($name == 'addproduct') {
        return view('admin.addproduct', ['protypes' => $protypes])->with('manufactures', $manufactures);
      }
      if ($name == 'protypes') {
        return view('admin.protypes', ['data' => $protypes]);
      }
      if ($name == 'addprotype') {
        return view('admin.addprotype', ['protypes' => $protypes])->with('manufactures', $manufactures);
      }
      if ($name == 'manufactures') {
        return view('admin.manufactures', ['data' => $manufactures]);
      }
      if ($name == 'addmanufacture') {
        return view('admin.addmanufacture', ['protypes' => $protypes])->with('manufactures', $manufactures);
      }
      if ($name == 'users') {
        return view('admin.users', ['data' => $users]);
      }
      if ($name == 'adduser') {
        return view('admin.adduser');
      }
    } else {
      return view('admin.login', ['data' => $admin]);
    }
  }
  function edit($name, $id,  Request $request)
  {
    $request->flash();
    $admin = Admin::all();
    $products = Product::all();
    $protypes = Protype::all();
    $manufactures = Manufacture::all();
    $users = User::all();

    if ($admin[0]->check_login == 1) {
      if ($name == 'editproduct' && $id != null) {
        $product = Product::find($id)->first();
        return view('admin.editproduct', [
          'protypes' => $protypes,
          'manufactures' => $manufactures,
          'product' => $product
        ]);
      }
      if ($name == 'editprotype' && $id != null) {
        $protype = Protype::where('type_id', $id)->first();
        return view('admin.editprotype', ['protype' => $protype]);
      }
      if ($name == 'editmanufacture' && $id != null) {
        $manufacture = Manufacture::where('manu_id', $id)->first();
        return view('admin.editmanufacture', ['manufacture' => $manufacture]);
      }
      if ($name == 'edituser' && $id != null) {
        $user = User::find($id);
        return view('admin.edituser', ['user' => $user]);
      }
    } else {
      return view('admin.login', ['data' => $admin]);
    }
  }
  function indexadmin()
  {
    $admin = Admin::all();
    if ($admin[0]->check_login == 1) {
      return view('admin.index', ['data' => $admin]);
    } else {
      return view('admin.login', ['data' => $admin]);
    }
  }
}
