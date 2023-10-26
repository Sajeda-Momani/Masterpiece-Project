<?php

namespace App\Http\Controllers;

use App\Models\Address;
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
        // Validate the request data
        $request->validate([

            'additional_information' => 'string',
            'city' => 'required',
            'street' => 'required',
            'department_number' => 'required',
            'phone' => 'required',
        ]);

        // Create a new address record
        $address = Address::create([
            'city' => $request->input('city'),
            'street' => $request->input('street'),
            'department_number' => $request->input('department_number'),
            'phone' => $request->input('phone'),
            'additional_information' => $request->input('additional_information'),
            'customer_id' => $request->user()->id, // Set 'customer_id' to the logged-in user's ID
        ]);

        // Create an order
        $order = new Order();
        $order->customer_id = $request->user()->id;
        $order->address_id = $address->id;
        $order->payment_method = $request->input('payment_method'); // Assuming payment_method is in the form

        // Calculate the total price
        $totalPrice = $request->user()->carts->sum('total');
        $order->total_price = $totalPrice;

        // Save the order
        $order->save();

        // Redirect to the order confirmation page
        return redirect()->route('thankyou', $order->id);
    }

    // public function checkout(Request $request)
    // {
    //     // dd($request);
    //     // // Validate the request
    //     // $request->validate([
    //     //     'address_id' => 'required',
    //     //     'payment_method' => 'required',
    //     // ]);

    //     // Get the address data from the request
    //     $addressData = [
    //         'city' => $request->input('city'),
    //         'street_address' => $request->input('street'),
    //         'apartment_number' => $request->input('department_number'),
    //         'phone_number' => $request->input('phone'),
    //         'phone' => $request->input('phone'),
    //         'additional_information' => $request->input('additional_information'),
    //     ];

    //     // Create a new address record
    //     $address = Address::create($addressData);

    //     // Create an order
    //     $order = new Order();
    //     $order->customer_id = $request->user()->id;
    //     $order->address_id = $address->id;
    //     $order->payment_method = $request->payment_method;

    //     // Calculate the total price
    //     $totalPrice = 0;
    //     foreach ($request->user()->carts as $cart) {
    //         $totalPrice += $cart->total;
    //     }
    //     $order->total_price = $totalPrice;

    //     // Save the order
    //     $order->save();

    //     // Create a payment
    //     // $payment = new Payment();
    //     // $payment->customer_id = $request->user()->id;
    //     // $payment->order_id = $order->id;
    //     // $payment->payment_method = $request->payment_method;
    //     // $payment->amount = $order->total_price;
    //     // $payment->currency = 'JD';
    //     // $payment->payment_status = 'pending';

    //     // // Save the payment
    //     // $payment->save();

    //     // Clear the cart
    //     // Cart::where('customer_id', $request->user()->id)->delete();

    //     // Redirect to the order confirmation page
    //     return redirect()->route('thankyou', $order->id);
    // }

    // public function checkout(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'address_id' => 'required',
    //         'payment_method' => 'required',
    //     ]);

    //     // Get the address data from the request
    //     $addressData = [
    //         'city' => $request->input('city'),
    //         'street_address' => $request->input('street'),
    //         'apartment_number' => $request->input('department_number'),
    //         'phone_number' => $request->input('phone'),
    //         'phone' => $request->input('phone'),
    //         'additional_information' => $request->input('additional_information'),
    //     ];

    //     // Create a new address record
    //     $address = Address::create($addressData);

    //     // Create an order
    //     $order = new Order();
    //     $order->customer_id = $request->user()->id;
    //     $order->address_id = $address->id;
    //     $order->payment_method = $request->payment_method;

    //     // Calculate the total price
    //     $totalPrice = 0;
    //     foreach ($request->user()->carts as $cart) {
    //         $totalPrice += $cart->total;
    //     }
    //     $order->total_price = $totalPrice;

    //     // Save the order
    //     $order->save();

    //     // Create a payment
    //     $payment = new Payment();
    //     $payment->customer_id = $request->user()->id;
    //     $payment->order_id = $order->id;
    //     $payment->payment_method = $request->payment_method;
    //     $payment->amount = $order->total_price;
    //     $payment->currency = 'JD';
    //     $payment->payment_status = 'pending';

    //     // Save the payment
    //     $payment->save();

    //     // Clear the cart
    //     Cart::where('customer_id', $request->user()->id)->delete();

    //     // Redirect to the order confirmation page
    //     return redirect()->route('thankyou', $order->id);
    // }

    // public function checkout(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'address_id' => 'required',
    //         'payment_method' => 'required',
    //     ]);

    //     $request->validate([
    //         'street' => 'required',
    //         'department_number' => 'required',
    //         'phone' => 'required',
    //     ]);

    //     // Create a new address record.

    //     $addressData = [
    //         'city' => $request->input('city'),
    //         'street_address' => $request->input('street'),
    //         'apartment_number' => $request->input('department_number'),
    //         'phone_number' => $request->input('phone'),
    //         'phone' => $request->input('phone'),
    //         'additional_information' => $request->input('additional_information'),
    //     ];

    //     // Create a new address record.
    //     $address = Address::create($addressData);

    //     $address = new Address();
    //     $address->city = $request->input('city');
    //     $address->street_address = $request->input('street');
    //     $address->apartment_number = $request->input('department_number');
    //     $address->phone_number = $request->input('phone');
    //     $address->save();

    //     // Associate the address with the order.

    //     $order = new Order();
    //     $order->customer_id = $request->user()->id;
    //     $order->address_id = $address->id;
    //     $order->save();
    //     // Get the address data from the request.

    //     // Associate the address with the order.
    //     $order = new Order();
    //     $order->customer_id = $request->user()->id;
    //     $order->address_id = $address->id;
    //     $order->save();

    //     // Redirect to the order confirmation page.

    //     return redirect()->route('thankyou', $order->id);
    //     // Create an order
    //     $payment = new Payment();
    //     $payment->customer_id = $request->user()->id;
    //     $payment->order_id = $order->id;
    //     $payment->payment_method = $request->payment_method;
    //     $payment->amount = $order->total_price;
    //     $payment->currency = 'JD';
    //     $payment->payment_status = 'pending';

    //     // Save the payment
    //     $payment->save();

    //     $order = new Order();
    //     $order->customer_id = $request->user()->id;
    //     $order->address_id = $request->address_id;
    //     $order->payment_method = $request->payment_method;

    //     // Calculate the total price
    //     $totalPrice = 0;
    //     foreach ($request->user()->carts as $cart) {
    //         $totalPrice += $cart->total;
    //     }
    //     $order->total_price = $totalPrice;

    //     // Save the order
    //     $order->save();

    //     // Create a payment

    //     // Clear the cart
    //     Cart::where('customer_id', $request->user()->id)->delete();

    //     // Redirect to the order confirmation page
    //     return redirect()->route('thankyou', $order->id);
    // }
}
