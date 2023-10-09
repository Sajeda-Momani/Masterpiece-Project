<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderItemController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;

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

Route::get('/ad', function () {
    return view('Admin.login');
});

Route::get('/home', function () {
    return view('Pages.index');
})->name('home');

Route::get('/account', function () {
    return view('Pages.account');
})->name('account');

Route::get('/404', function () {
    return view('Pages.404');
})->name('404');

Route::get('/about', function () {
    return view('Pages.about');
})->name('about');

Route::get('/cart', function () {
    return view('Pages.cart');
})->name('cart');

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

Route::get('/login', function () {
    return view('Pages.login');
})->name('login');

Route::get('/shop', function () {
    return view('Pages.shop');
})->name('shop');

Route::get('/singleproduct', function () {
    return view('Pages.singleproduct');
})->name('singleproduct');

Route::get('/thankyou', function () {
    return view('Pages.thankyou');
})->name('thankyou');

Route::get('/wishlist', function () {
    return view('Pages.wishlist');
})->name('wishlist');

// ///////////////// Dashboard ///////////////////

Route::get('/dashboard', [CustomerController::class, 'Recent']);

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


