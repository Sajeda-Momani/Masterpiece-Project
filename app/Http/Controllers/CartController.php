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
