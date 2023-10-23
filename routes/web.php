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




Route::get('/home', [HomeController::class, 'showhome']);

Route::get('/shop', [ProductController::class, 'showshop'])->name('shop');

Route::get('/singleproduct/{id}', [ProductController::class, 'showsingle'])->name('singleproduct');

// Route::get('/cart', [CartController::class, 'index'])->name('cart');
// Route::get('/addItemToCart/{id}', [CartController::class, 'addItemToCart'])->name('addItemToCart');
// Route::get('/addProductToCart/{id}', [CartController::class, 'addProductToCart'])->name('addProductToCart');

// Route::get('/cart/{id}', [CartController::class, 'add'])->name('cart.add');
// Route::get('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
// Route::get('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
// Route::get('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
// Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
// Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');

/*--------------------------------------------- CART --------------------------------------------- */
Route::get('/cart', [CartController::class, 'index'])->name('cart');
//Add Menu Item To Cart
Route::get('/addItemToCart/{id}', [CartController::class, 'addItemToCart'])->name('addItemToCart');

//Add Menu Item To Cart
Route::get('/addProductToCart/{id}', [CartController::class, 'addProductToCart'])->name('addProductToCart');

Route::get('/qtyInc/{id}', [CartController::class, 'qtyInc'])->name('qtyInc');
Route::get('/qtyDec/{id}', [CartController::class, 'qtyDec'])->name('qtyDec');
Route::get('/removeFromCart/{id}', [CartController::class, 'removeFromCart'])->name('removeFromCart');

Route::post('handleCoupon', [CartController::class, 'handleCoupon'])->name('handleCoupon');
/*------------------------------------------- END CART -------------------------------------------- */


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('Pages.login');
// })->name('login');

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

// ///////////////// Dashboard ///////////////////

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