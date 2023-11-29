<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function showhome()
    {
        if (true) {

            // if (Auth::user()->role == 'customer') {

            $categories = Category::all();
            $categoryIds = $categories->pluck('id');

            $lowestPrices = Product::whereIn('category_id', $categoryIds)
                ->selectRaw('MIN(price) as lowest_price, category_id')
                ->groupBy('category_id')
                ->get();

            $products = Product::all();

            return view('Pages.Home.Index', ['categories' => $categories, 'lowestPrices' => $lowestPrices, 'products' => $products]);
            // } else if (Auth::user()->role == 'admin') {

            //     $recentCustomers = Customer::latest()->take(5)->get(); // Retrieve the most recent 5 customers (adjust as needed)
            //     $recentOrders = Order::orderBy('order_date', 'desc')->take(5)->get();

            //     return view('Admin.dashboard', [
            //         'recentCustomers' => $recentCustomers,
            //         'recentOrders' => $recentOrders
            //     ]);
            // } else {

            //     return redirect()->back();
            // }
        }
        // Handle the case when the user is not authenticated (Auth::id() is null or false)
        // You might want to redirect the user to a login page or take other actions here.
    }

    public function Recent()
{
    if (Auth::check()) {
        $user = Auth::user();
        $name = $user->name;
        $email = $user->email;

        if ($user->role != 'customer') {
            $recentCustomers = Customer::latest()->take(5)->get(); // Retrieve the most recent 5 customers (adjust as needed)
            $recentOrders = Order::orderBy('order_date', 'desc')->take(5)->get();

            return view('Admin.dashboard', [
                'recentCustomers' => $recentCustomers,
                'recentOrders' => $recentOrders,
                'name' => $name,
                'email' => $email
            ]);
        }
    }

}
}