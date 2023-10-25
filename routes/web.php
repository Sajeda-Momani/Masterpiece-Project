<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderItemController;
use App\Models\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


// ************************* Main routes ********************************

Route::get('/home', [HomeController::class, 'showhome']);

Route::get('/shop', [ProductController::class, 'showshop'])->name('shop');

Route::get('/singleproduct/{id}', [ProductController::class, 'showsingle'])->name('singleproduct');


// ************************* Dashboard routes *************************

Route::get('/dashboard', [HomeController::class, 'Recent']);

Route::resource('/categories', CategoryController::class);
Route::resource('/products', ProductController::class);
Route::resource('/admins', AdminController::class);
Route::resource('/contacts', ContactController::class);
Route::resource('/coupons', CouponController::class);
Route::resource('/customers', CustomerController::class);
Route::resource('/orders', OrderController::class);
Route::resource('/ordersitem', OrderItemController::class);
Route::resource('/reviews', ReviewController::class);
Route::resource('/address', AddressController::class);
Route::resource('/paymant', PaymentController::class);


// ************************* cart routes *************************


Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{itemId}', [CartController::class, 'removeItem'])->name('cart.remove');
Route::post('/cart/remove-all-items', [CartController::class, 'removeAllItems'])->name('cart.removeAllItems');
Route::get('/increaseQuantity/{id}', [CartController::class, 'increaseQuantity'])->name('increaseQuantity');
Route::get('/decreaseQuantity/{id}', [CartController::class, 'decreaseQuantity'])->name('decreaseQuantity');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');



// ************************* Addtional routes *************************


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ad', function () {
    return view('Admin.login');
});
Route::get('/account', function () {
    return view('Pages.account');
})->name('account');

Route::get('/404', function () {
    return view('Pages.404');
})->name('404');

Route::get('/about', function () {
    return view('Pages.about');
})->name('about');

Route::get('/checkout', function () {
    return view('Pages.checkout');
})->name('checkout');

Route::get('/contact', function () {
    return view('Pages.contact');
})->name('contact');

Route::get('/emptycart', function () {
    return view('Pages.emptycart');
})->name('emptycart');

Route::get('/faq', function () {
    return view('Pages.faq');
})->name('faq');

Route::get('/thankyou', function () {
    return view('Pages.thankyou');
})->name('thankyou');

Route::get('/wishlist', function () {
    return view('Pages.wishlist');
})->name('wishlist');