<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Manufacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "8";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "creat";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "creat";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::where('type_id','=',$id)->where('quantity','>',0)->paginate(3);
        $protypes = Protype::all();
        $manufactures = Manufacture::all();
        return view('productype',['data'=>$products])->with('protypes',$protypes)->with('i',(request()->input('page',1)-1)*4) ->with('protypes',$protypes)
        ->with('manufactures',$manufactures);
        // return view('productype');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo "creat";
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
        echo "creat";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo "creat";
    }
}
