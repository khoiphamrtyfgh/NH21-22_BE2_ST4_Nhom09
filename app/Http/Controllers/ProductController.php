<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Protype;
use Illuminate\Http\Request;
use App\Models\Comment;



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
    public function create(Request $request, $products)
    {
        // echo "create";
        // DB::insert('insert into products(id,name,manu_id,type_id,price,image) values(?,?,?,?,?,?)',['13','2','8','9','8','2']);

        // $products = Product::find(1);
        $protypes = Protype::all();
        return view('product', ['data' => $products])->with('protypes', $protypes);



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

        DB::insert('insert into protypes (type_id,type_name) values (?,?)', [12, 'mm']);
        echo "soer";



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
        $products = Product::find($id);
        $protypes = Protype::all();
        // $products = Product::where('name','like','%'.$request->old('keyword').'%' )->paginate(3);
        $ratingstart = Comment::where('product_id', $id)->sum('rating');

        // $ratingstart = Comment::sum('rating');
        $ratingall = Comment::where('product_id', $id);
        // $ratingstart = Comment::find($id)->sum('rating');
        $comment = Comment::where('product_id', '=', $id);
        $countrating5 = Comment::where('rating', '5')->where('product_id', '=', $id);
        $countrating4 = Comment::where('rating', '4')->where('product_id', '=', $id);
        $countrating3 = Comment::where('rating', '3')->where('product_id', '=', $id);
        $countrating2 = Comment::where('rating', '2')->where('product_id', '=', $id);
        $countrating1 = Comment::where('rating', '1')->where('product_id', '=', $id);
        $comments = Comment::where('product_id', '=', $id)->paginate(4);
        return view('product', ['data' => $products])->with('i', (request()->input('page', 1) - 1) * 4)->with('protypes', $protypes)
            ->with('comments', $comments)
            ->with('comment', $comment)
            ->with('ratingall', $ratingall)
            ->with('ratingstart', $ratingstart)
            ->with('countrating5', $countrating5)
            ->with('countrating4', $countrating4)
            ->with('countrating3', $countrating3)
            ->with('countrating2', $countrating2)
            ->with('countrating1', $countrating1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "edit" . $id;
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
        $request->flash();
        $tam = 0;
        $product = Product::find($id);
        if ($request->old('name') != null) {
            $tam++;
            $product->name = $request->old('name');
        }
        if ($request->old('manu_id') != null) {
            $tam++;
            $product->manu_id = $request->old('manu_id');
        }
        if ($request->old('type_id') != null) {
            $tam++;
            $product->type_id = $request->old('type_id');
        }
        if ($request->old('price') != null) {
            $tam++;
            $product->price = $request->old('price');
        }
        if ($_FILES['image']['name'] != null) {
            $tam++;
            $product->image =  $_FILES['image']['name'];
            $request->file('image')->move('img', $request->file('image')->getClientOriginalName(), 'local');
        }
        if ($request->old('description') != null) {
            $tam++;
            $product->description = $request->old('description');
        }

        if ($request->old('quantity') != null) {
            $tam++;
            $product->quantity = $request->old('quantity');
        }
        if ($request->old('feature') != null) {
            $tam++;
            $product->feature = $request->old('feature');
        }


        if ($tam > 0) {
            $product->save();
        }

        $products = Product::all();
        return view('admin.products', ['data' => $products]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Islluminate\Http\Response
     */
    public function destroy($id)
    {


        $product = Product::where('id', $id)->first();
        $product->delete();
        return redirect()->back();
        // echo "destroy" .$id;


        // Product::where('id', $id)->delete();

        //$products = Product::all();

        //return view('products',['data'=>$products]);
        //return view('trangchu');


        //    echo "da xoa";
        //    header('location:products.php');


        //    return redirect()->route('products');
        //    header("Location: /products",['data'=>$products]);
        // action([WelcomeController::class, 'web']);

        // return redirect()->route->get('/{products}', [WelcomeController::class, 'web']);






    }
    public function add(Request $request)
    {
        $request->flash();

        $product = new Product();


        $product->name = $request->old('name');
        $product->manu_id = $request->old('manu_id');
        $product->type_id = $request->old('type_id');
        $product->price = $request->old('price');
        $product->image =  $_FILES['image']['name'];

        if ($product->image != null) {
            $request->file('image')->move('img', $request->file('image')->getClientOriginalName(), 'local');
        }

        $product->description = $request->old('description');
        $product->quantity = $request->old('quantity');
        $product->feature = $request->old('feature');

        $product->save();

        $products = Product::all();
        return view('admin.products', ['data' => $products]);
    }
}
