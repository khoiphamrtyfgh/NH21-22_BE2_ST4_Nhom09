<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Protype;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // echo "create";
        // DB::insert('insert into products(id,name,manu_id,type_id,price,image) values(?,?,?,?,?,?)',['13','2','8','9','8','2']);

        // $products = Product::find(1);
        $protypes = Protype::all();
        return view('product',['data'=>$products])->with('protypes',$protypes);
        
       

    // return view('test')->with('create',$create);     
    }

    /**s
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "create";
      
       DB::insert('insert into protypes (type_id,type_name) values (?,?)',[12,'mm']);
      
    // return view('test');  
    echo "soer";
        
    
        // echo "store";
        // return view('trangchu')->with('product',$product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo "show" .$id;
        $products = Product::find($id);
        $protypes = Protype::all();
        return view('product',['data'=>$products])->with('protypes',$protypes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit" .$id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        echo "update" .$id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Islluminate\Http\Response
     */
    public function destroy($id)
    {
        
        // echo "destroy" .$id;
       
       
        // Product::where('id', $id)->delete();
      
       $products = Product::all();
   
       //return view('products',['data'=>$products]);
      return view('trangchu');
   
        
    //    echo "da xoa";
    //    header('location:products.php');
      
       
    //    return redirect()->route('products');
    //    header("Location: /products",['data'=>$products]);
    // action([WelcomeController::class, 'web']);
    
    // return redirect()->route->get('/{products}', [WelcomeController::class, 'web']);
    
       

         
   
      
    }
}
