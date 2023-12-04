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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [HomeController::class, 'Recent', 'showUserInfo'])->middleware('admin');

    Route::resource('/categories', CategoryController::class)->middleware('admin');
    Route::resource('/products', ProductController::class)->middleware('admin');
    Route::resource('/admins', AdminController::class)->middleware('admin');
    Route::resource('/admin_contacts', ContactController::class)->middleware('admin');
    Route::resource('/coupons', CouponController::class)->middleware('admin');
    Route::resource('/customers', CustomerController::class)->middleware('admin');
    Route::resource('/orders', OrderController::class)->middleware('admin');
    Route::resource('/ordersitem', OrderItemController::class)->middleware('admin');
    Route::resource('/reviews', ReviewController::class)->middleware('admin');
    Route::resource('/address', AddressController::class)->middleware('admin');
    Route::resource('/paymant', PaymentController::class)->middleware('admin');
});

require __DIR__ . '/auth.php';


// ************************* Main routes ********************************


Route::get('/home', [HomeController::class, 'showhome']);
Route::get('/shop', [ProductController::class, 'showshop'])->name('shop');
Route::get('/shop/sort', [ProductController::class, 'sortBy'])->name('products.sort');
Route::get('/singleproduct/{id}', [ProductController::class, 'showsingle'])->name('singleproduct');


// ************************* cart routes *************************

Route::group(['middleware' => ['web']], function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
    Route::delete('/cart/remove/{itemId}', [CartController::class, 'removeItem'])->name('cart.remove');
    Route::post('/cart/remove-all-items', [CartController::class, 'removeAllItems'])->name('cart.removeAllItems');
    Route::get('/increaseQuantity/{id}', [CartController::class, 'increaseQuantity'])->name('increaseQuantity');
    Route::get('/decreaseQuantity/{id}', [CartController::class, 'decreaseQuantity'])->name('decreaseQuantity');
    Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
    Route::get('/checkout', function () {
        return view('Pages.checkout');
    })->name('checkout');

    Route::get('/thankyou', function () {
        return view('Pages.thankyou');
    })->name('thankyou');
});

// ************************* Addtional routes *************************

Route::get('search', [HomeController::class,'searchProducts'])->name('searchProducts');
Route::resource('contact', ContactController::class);
Route::get('/about', function () { return view('Pages.about');})->name('about');
Route::get('/contact', function () { return view('Pages.contact');})->name('contact');


// ************************* Advanced routes *************************

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

Route::get('/emptycart', function () {
    return view('Pages.emptycart');
})->name('emptycart');

Route::get('/faq', function () {
    return view('Pages.faq');
})->name('faq');

Route::get('/wishlist', function () {
    return view('Pages.wishlist');
})->name('wishlist');

Route::get('/', function () {
    return view('welcome');
});