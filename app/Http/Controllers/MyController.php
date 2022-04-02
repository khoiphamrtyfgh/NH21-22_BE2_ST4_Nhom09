<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function index() {
        return view('index');
    }
    function product() {
        return view('product');
    }
    function store() {
        return view('store');
    }
}