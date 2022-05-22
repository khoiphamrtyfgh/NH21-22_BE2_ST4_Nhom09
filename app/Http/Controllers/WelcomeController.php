<?php

namespace App\Http\Controllers;
use Illuminate\View\View\simplePaginate;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
 use Illuminate\Support\Facades\DB;

 
 
class WelcomeController extends Controller
{

    function web($name,Request $request){
        if($name == 'index'){
             $products = Product::limit(8)->where('quantity','>',0)->get();
             
             $type = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=1');
             $type1 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=2');
             $type2 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=3 ');


            
            // $products = Product::paginate(4);
            $protypes = Protype::all();
        //    $products = Cart::content();
        //  return view($name,compact('products'))->with('i',(request()->input('page',1)-1)*2);
            return view($name,['data'=>$products])->with('protypes',$protypes)->with('type',$type)->with('type1',$type1)->with('type2',$type2);
                                                  
                                                //    ->with('i',(request()->input('page',1)-1)*4)
                                                //    ->with('product',$product);
           
        }
      if($name == 'products')
      {
       
        $products = Product::all();
   
        return view($name,['data'=>$products]);
      }
       
     
        if($name == 'result'){
          
            $product = Product::all();
            $request->flash();
            $protypes = Protype::all();
            $manufactures = Manufacture::all();
             $request->old('keyword');
               $products = Product::where('name','like','%'.$request->old('keyword').'%')->where('quantity','>',0)->paginate(3);   
            //   $products = Product::where('name','like','%'+$tukho+'%')->get();
               return view('result',['data'=>$products])->with('i',(request()->input('page',1)-1)*4)->with('protypes',$protypes)
               ->with('product',$product)
               ->with('manufactures',$manufactures);                         
            // $products = Product::where('name','like','%iphone%')->get();                           
            // return view('index2',['data'=>$products]);                     
           //   $products = Product::where('name','like','%'+$tukho+'%')->get();
           // $products = Product::all()->where('name','like','Iphone')->get();          
            //  return view('result',['data'=>$products]);
        }
      if ($name =='productype'){
        $protypes = Protype::all();
        return view('productype')->with('protypes',$protypes); 
       }
       else
       {
         return view($name);
       }
        return view($name);   
    }
   
    function getAllProducts(){
        $products = Product::all();
        return view('index',['data'=>$products]);
    }
    function getSearch(Request $request)
    {
        $request->flash();
        $product = Product::all();
        $protypes = Protype::all();
        $manufactures = Manufacture::all();
         $request->old('keyword');
         $request->old('type_id');
         if($request->old('searchCol')== '0')
         {
           $products = Product::where('name','like','%'.$request->old('keyword').'%' )->paginate(3);
         }
         else{
            $products = Product::where('name','like','%'.$request->old('keyword').'%')->where('type_id' ,'=', $request->old('searchCol'))->paginate(4);
         }

        //   $products = Product::where('name','like','%'+$tukho+'%')->get();
        // $products = Product::all()->where('name','like','Iphone')->get();
           return view('result',['data'=>$products])->with('i',(request()->input('page',1)-1)*4) ->with('protypes',$protypes)
           ->with('product',$product)
           ->with('manufactures',$manufactures);
        
           
    }
    // demo

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
