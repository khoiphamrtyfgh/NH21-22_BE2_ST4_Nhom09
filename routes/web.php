
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProtypeController;
use App\Helper\CartHelper;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CartController;

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

//Route::get('/{name?}', [WelcomeController::class, 'getAllProducts']);
// Route::get('/{name?}', [MyController::class, 'index']);;
// Route::get('/{name}', [WelcomeController::class, 'web']);
// Route::get('/{name?}', [WelcomeController::class, 'web']);
// Route::post('/result', [WelcomeController::class, 'getSearch']);
//Route::get('/', [WelcomeController::class, 'getAllProduct']);
//Route::get('/', [WelcomeController::class, 'getAllProductById']);


// Route::get('/', [WelcomeController::class, 'getAllProducts']);

// Route::get('/product', [MyController::class, 'product']); 
// Route::post('/product', [MyController::class, 'create']); 
// Route::get('/product', [MyController::class, 'create']); 
Route::resource('/protype',ProtypeController::class);
Route::resource('/product',ProductController::class);

Route::get('/', function () {
    return view('trangchu');
});
// Route::get('/dashboard', [WelcomeController::class, 'getAllProducts'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {
    
     return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
Route::get('/{name?}', [WelcomeController::class, 'web']);
Route::post('/result', [WelcomeController::class, 'getSearch']);
//Giỏ hàng
Route::group(['prefix' => 'cart'],function(){
    Route::get('view',[CartController::class,'view'])->name('cart.view');
    Route::get('add/{id}/{quantity?}',[CartController::class,'add'])->name('cart.add');
    Route::get('remove/{id}',[CartController::class,'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity?}',[CartController::class,'update'])->name('cart.update');
});

