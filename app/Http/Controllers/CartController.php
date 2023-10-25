<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;

class CartController extends Controller
{
    public function index(Request $request)
    {
        $carts = Cart::where('customer_id', $request->user()->id)->get();

        return view('Pages.cart', compact('carts'));
    }
    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);

        $cart = Cart::where('customer_id', $request->user()->id)
            ->where('product_id', $productId)
            ->first();

        if ($cart) {
            $cart->quantity = $request->input('quantity') ?: $cart->quantity + 1;
        } else {
            $cart = new Cart();
            $cart->customer_id = $request->user()->id;
            $cart->product_id = $productId;
            $cart->quantity = $request->input('quantity') ?: 1;
        }

        $cart->price = $product->price * $cart->quantity;
        $cart->total = $cart->price + $cart->shipping_fee + $cart->maintenance_fee + $cart->installation_fee;
        $cart->save();

        return redirect()->route('cart.index');
    }

    public function increaseQuantity($id)
    {
        $cartItem = Cart::find($id);

        if ($cartItem) {
            // Increment the quantity
            $cartItem->quantity += 1;
            $cartItem->save();
        }

        return redirect()->back();
    }

    public function decreaseQuantity($id)
    {
        $cartItem = Cart::find($id);

        if ($cartItem && $cartItem->quantity > 1) {
            // Decrement the quantity (if it's greater than 1)
            $cartItem->quantity -= 1;
            $cartItem->save();
        }

        return redirect()->back();
    }
    public function removeItem(Request $request, $itemId)
    {
        $cart = Cart::findOrFail($itemId);
        $cart->delete();

        return redirect()->route('cart.index');
    }


    public function removeAllItems(Request $request)
    {
        Cart::where('customer_id', $request->user()->id)->delete();

        return redirect()->route('cart.index');
    }


    public function checkout(Request $request)
    {
        // Validate the request
        $request->validate([
            'address_id' => 'required',
            'payment_method' => 'required',
        ]);

        // Create an order
        $order = new Order();
        $order->customer_id = $request->user()->id;
        $order->address_id = $request->address_id;
        $order->payment_method = $request->payment_method;

        // Calculate the total price
        $totalPrice = 0;
        foreach ($request->user()->carts as $cart) {
            $totalPrice += $cart->total;
        }
        $order->total_price = $totalPrice;

        // Save the order
        $order->save();

        // Create a payment
        $payment = new Payment();
        $payment->customer_id = $request->user()->id;
        $payment->order_id = $order->id;
        $payment->payment_method = $request->payment_method;
        $payment->amount = $order->total_price;
        $payment->currency = 'USD';
        $payment->payment_status = 'pending';

        // Save the payment
        $payment->save();

        // Clear the cart
        Cart::where('customer_id', $request->user()->id)->delete();

        // Redirect to the order confirmation page
        return redirect()->route('order.confirmation', $order->id);
    }
}
