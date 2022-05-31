
<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProtypeController;
use App\Helper\CartHelper;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MailCotroller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManufactureController;
use App\Models\Protype;

Route::get('view', [CheckOutController::class, 'view'])->name('checkout.view');
// admin

Route::post('/admin/index', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);


Route::resource('/manufacture', ManufactureController::class);
Route::post('/admin/products', [ProductController::class, 'add']);
Route::post('/admin/products/{id}', [ProductController::class, 'update']);
Route::post('/admin/protypes', [ProtypeController::class, 'add']);
Route::post('/admin/protypes/{id}', [ProtypeController::class, 'update']);
Route::post('/admin/manufactures', [ManufactureController::class, 'add']);
Route::post('/admin/manufactures/{id}', [ManufactureController::class, 'update']);
Route::post('/admin/users', [UserController::class, 'add']);
Route::post('/admin/users/{id}', [UserController::class, 'update']);

Route::get('/admin', [WelcomeController::class, 'indexadmin']);
Route::get('/admin/{name?}', [WelcomeController::class, 'admin']);
Route::get('/admin/{name?}/{id?}', [WelcomeController::class, 'edit']);


//Gửi email
Route::get('/sendemail', [MailCotroller::class, 'sendEmail'])->name('send');
Route::resource('/protype', ProtypeController::class);
Route::resource('/product', ProductController::class);
//Bình luận
Route::resource('/comment', CommentController::class);
// sản hẩm yêu thích
Route::resource('/book', BookController::class);
// Check out
//Xem đơn hàng đã đặt
Route::resource('/order', OrderController::class);
// admin
Route::resource('/user', UserController::class);

Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/dashboard', [WelcomeController::class, 'getAllProducts'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__ . '/auth.php';
Route::get('/checkout', [WelcomeController::class, 'getAllProduct'])->name('checkout');
Route::get('/{name?}', [WelcomeController::class, 'web']);

Route::post('/result', [WelcomeController::class, 'getSearch']);
//Giỏ hàng
Route::group(['prefix' => 'cart'], function () {
    Route::get('view', [CartController::class, 'view'])->name('cart.view');
    Route::get('add/{id}/{quantity?}', [CartController::class, 'add'])->name('cart.add');
    Route::get('remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::get('update/{id}/{quantity?}', [CartController::class, 'update'])->name('cart.update');
});
