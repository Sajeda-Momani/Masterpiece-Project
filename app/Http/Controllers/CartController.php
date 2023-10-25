<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; // Import the Session class

class CartController extends Controller
{
    public function index()
    {
        // Fetch cart items and calculate total price and discount as needed
        $cartItems = Session::get('cart', []); // Assuming you're using the session for the cart
        $totalPrice = $this->calculateTotalPrice($cartItems);
        $discount = null; // You may calculate this as per your requirements

        return view('Pages.cart', compact('cartItems', 'totalPrice', 'discount'));
    }

    public function addItemToCart($id)
    {
        $product = Product::findOrFail($id);

        // Get the current cart items from the session
        $cartItems = Session::get('cart', []);

        // Check if the item is already in the cart
        if (array_key_exists($id, $cartItems)) {
            // Increment the quantity if the item is already in the cart
            $cartItems[$id]['qty']++;
        } else {
            // Add the item to the cart
            $cartItems[$id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'image1' => $product->image1,
                'qty' => 1,
            ];
        }

        // Store the updated cart items back in the session
        Session::put('cart', $cartItems);

        return redirect()->route('cart');
    }

    public function qtyInc($id)
    {
        $cartItems = Session::get('cart', []);

        if (array_key_exists($id, $cartItems)) {
            $cartItems[$id]['qty']++;
        }

        Session::put('cart', $cartItems);

        return redirect()->back();
    }

    public function qtyDec($id)
    {
        $cartItems = Session::get('cart', []);

        if (array_key_exists($id, $cartItems) && ($cartItems[$id]['qty'] - 1) > 0) {
            $cartItems[$id]['qty']--;
        }

        Session::put('cart', $cartItems);

        return redirect()->back();
    }

    public function removeFromCart($id)
{
    $cartItems = Session::get('cart', []);

    foreach ($cartItems as $key => $cartItem) {
        if ($cartItem['id'] == $id) {
            unset($cartItems[$key]);
        }
        
    }

    Session::put('cart', $cartItems);

    return redirect()->back();
}


    public function handleCoupon(Request $request)
    {
        $discountCode = Coupon::where('discount_code', $request->coupon)->first();

        if ($discountCode) {
            $per = $discountCode->discount_per;
            $cartItems = Session::get('cart', []);
            $totalPrice = $this->calculateTotalPrice($cartItems);
            $discount = $totalPrice * $per;
            $totalPrice -= $discount;

            return view('Pages.cart', compact('cartItems', 'totalPrice', 'discount'));
        } else {
            return redirect()->back();
        }
    }

    private function calculateTotalPrice($cartItems)
    {
        $totalPrice = 0;

        foreach ($cartItems as $item) {
            $totalPrice += $item['price'] * $item['qty'];
        }

        return $totalPrice;
    }
}
// <?php

// namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use App\Models\Coupon;
// use App\Models\Cart;
// use App\Models\Product;
// use App\Models\Customer;
// use App\Http\Controllers\Auth;
// use App\Models\Category;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session;
// use Illuminate\Support\Facades\DB;

// class CartController extends Controller
// {
//     public function __construct()
//     {
//         $this->middleware('auth');

//         $this->migrateToDatabase();
//     }

//     private function migrateToDatabase()
//     {
//         $cartItems = Session::get('cart', []);

//         foreach ($cartItems as $item) {
//             Cart::create([
//                 'customer_id' => $this->customer()->id,
//                 'product_id' => $item['id'],
//                 'quantity' => $item['qty'],
//             ]);
//         }

//         Session::forget('cart');
//     }

//     public function index()
//     {
//         // Fetch cart items from the database
//         $cartItems = Cart::where('customer_id', auth()->user()->id)->get();

//         // Calculate total price and discount as needed
//         $totalPrice = $this->calculateTotalPrice($cartItems);
//         $discount = null; // You may calculate this as per your requirements

//         return view('Pages.cart', compact('cartItems', 'totalPrice', 'discount'));
//     }


//     public function addItemToCart($id)
//     {
//         $product = Product::findOrFail($id);

//         // Check if the item is already in the cart
//         $cartItem = Cart::where('customer_id', $this->customer()->id)->where('product_id', $id)->first();

//         if ($cartItem) {
//             // Increment the quantity if the item is already in the cart
//             $cartItem->quantity++;
//             $cartItem->save();
//         } else {
//             // Add the item to the cart
//             Cart::create([
//                 'customer_id' => $this->customer()->id,
//                 'product_id' => $id,
//                 'quantity' => 1,
//             ]);
//         }

//         return redirect()->route('cart');
//     }

//     public function qtyInc($id)
//     {
//         $cartItem = Cart::where('customer_id', $this->customer()->id)->where('product_id', $id)->first();

//         if ($cartItem) {
//             $cartItem->quantity++;
//             $cartItem->save();
//         }

//         return redirect()->back();
//     }

//     public function qtyDec($id)
//     {
//         $cartItem = Cart::where('customer_id', $this->customer()->id)->where('product_id', $id)->first();

//         if ($cartItem && ($cartItem->quantity - 1) > 0) {
//             $cartItem->quantity--;
//             $cartItem->save();
//         }

//         return redirect()->back();
//     }

//     public function removeFromCart($id)
//     {
//         $cartItem = Cart::where('customer_id', $this->customer()->id)->where('product_id', $id)->first();

//         if ($cartItem) {
//             $cartItem->delete();
//         }

//         return redirect()->back();
//     }

//     public function handleCoupon(Request $request)
//     {
//         $discountCode = Coupon::where('discount_code', $request->coupon)->first();

//         if ($discountCode) {
//             $per = $discountCode->discount_per;
//             $cartItems = Cart::where('customer_id', $this->customer()->id)->get();
//             $totalPrice = $this->calculateTotalPrice($cartItems);
//             $discount = $totalPrice * $per;
//             $totalPrice -= $discount;

//             return view('Pages.cart', compact('cartItems', 'totalPrice', 'discount'));
//         } else {
//             return redirect()->back();
//         }
//     }

//     private function calculateTotalPrice($cartItems)
//     {
//         $totalPrice = 0;

//         foreach ($cartItems as $item) {
//             $totalPrice += $item->price * $item->quantity;
//         }

//         return $totalPrice;
//     }
// }
