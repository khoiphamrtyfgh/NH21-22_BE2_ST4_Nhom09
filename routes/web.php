
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WelcomeController;

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
// Route::get('/{name?}', [MyController::class, 'index']);
Route::get('/', [WelcomeController::class, 'getAllProducts']);
//Route::get('/', [WelcomeController::class, 'getAllProduct']);
//Route::get('/', [WelcomeController::class, 'getAllProductById']);



// Route::get('/product', [MyController::class, 'product']); 
// Route::get('/store', [MyController::class, 'store']); 



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
