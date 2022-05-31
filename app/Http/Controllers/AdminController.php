<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    public function login(Request $request)
    {
        $request->flash();
        $admin = Admin::find(1);
        $user_name = $request->old('username');
        $password = $request->old('password');
        if ($admin->user_name == $user_name && $admin->password == $password) {


            $admin->check_login = 1;
            $admin->save();

            return view('admin.index', ['data' => $admin]);
        } else {
            return view('admin.login', ['data' => $admin]);
        }
    }
    public function logout()
    {
        $admin = Admin::find(1);
        $admin->user_name == $admin->user_name;
        $admin->password == $admin->password;
        $admin->check_login = 0;
        $admin->save();

        $admins = Admin::all();
        return view('admin.login', ['data' => $admins]);
    }
}
