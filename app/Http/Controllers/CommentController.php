<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Mamufacture;
use Illuminate\Support\Facades\DB;



class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
               
        $request->flash();
        $comment = new Comment;
        $comment->user_name = $request->user_name;
        $comment->user_gmail = $request->user_gmail;
        $comment->comment_content = $request->old('commentcontent');
        $comment->rating =  $request->old('rating');
        $comment->product_id =  $request->old('commentid');
        $comments = Comment::find($request->commentid);
        $products = Product::find(($request->commentid));
        //  $product = Product::find($request->old('commentid'));
         $products->comments()->save($comment);
        //  $comment->save();
         echo "them thanh cong";
         $protypes = Protype::all();
        //  return view('product',['data'=>$products])->with('protypes',$protypes);
       

        $product = Product::limit(8)->where('quantity','>',0)->get();
             

        $type = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=1 limit 5');
        $type1 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=2 limit 5');
        $type2 = DB::select('SELECT * FROM `products`sp , `protypes` tp  WHERE sp.`type_id` = tp.type_id AND sp.`type_id`=3 limit 5 ');
      


       
      
       $protypes = Protype::all();
   //    $products = Cart::content();
   //  return view($name,compact('products'))->with('i',(request()->input('page',1)-1)*2);
   return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
       
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        $request->flash();
        $comment=Comment::where('id',$id)->first();
        $comment->delete();
        return redirect()->back();
    }
}
