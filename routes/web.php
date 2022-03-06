<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{page?}', function ($page = "index") {
  
    return view($page);
});
/*
Route::get('/{index}{indec}', function ($name) {
    echo "xin chao ". $name;
    return view('index') ;
 });
 */
Route::get('/user/{id}', function ($id) {
    echo "xin chao ". $id;
})->where('id', '[0-9]+');

/*
Route::get('/index', function () {
    return view('index');
});
*/
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/indec', function () {
    return view('indec');
});
*/
// khoong cos tham so cungx chayj dc ko bawt
Route::get('/rp/{name}', function ($name) {
   echo "xin chao ". $name;
});
// bawts buoocj cos tham so
Route::get('/op/{name?}', function ($name="demo") {
    echo "xin chao ". $name;
 });


