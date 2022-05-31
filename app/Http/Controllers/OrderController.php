<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Protype;

use App\Helper\CartHelper;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::all();
        $protypes = Protype::all();
        return view('order',['data'=>$order])->with('protypes',$protypes);
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
    public function store(Request $request,CartHelper $cart)
    {
        $request->flash();
        
        $comment = new Order;
       
        $comment->firstsName = $request->first_name;
        $comment->lastName = $request->last_name;
        $comment->telephone =  $request->tel;
        $comment->address =  $request->address;
        $comment->money =   $request->money;
        $comment->product_name =  $request->product_name;
        $comment->product_id =  $request->product_id;

       
       
        $comment->save();
        $cart->clear();

        $order = Order::all();
        $protypes = Protype::all();
        return view('order',['data'=>$order])->with('protypes',$protypes);
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
