<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        //
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
        $request->flash();
        $user = User::find($id);
        $user->name = $request->old('name');
        $user->email = $request->old('email');
        $user->password = $request->old('password');
        $user->remember_token = $request->old('remember_token');

        $user->save();

        $users = User::all();
        return view('admin.users', ['data' => $users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
        //
    }
    public function add(Request $request)
    {
        $request->flash();

        $user = new User();

        $user->name = $request->old('name');
        $user->email = $request->old('email');
        //$user->users_email_unique = Date("Y-m-d h:i:s");
        $user->password = md5($request->old('password'));
        $user->remember_token = $request->old('remember_token');

        $user->save();

        $users = User::all();
        return view('admin.users', ['data' => $users]);
    }
}
