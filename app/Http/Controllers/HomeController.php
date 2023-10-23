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
        $categories = Category::all();
        $categoryIds = $categories->pluck('id');

        $lowestPrices = Product::whereIn('category_id', $categoryIds)
            ->selectRaw('MIN(price) as lowest_price, category_id')
            ->groupBy('category_id')
            ->get();

        $products = Product::all();

        return view('Pages.home', ['categories' => $categories, 'lowestPrices' => $lowestPrices, 'products' => $products]);
    }

    // Handle the case when the user is not authenticated (Auth::id() is null or false)
    // You might want to redirect the user to a login page or take other actions here.

    public function Recent()
    {
        $recentCustomers = Customer::latest()->take(5)->get(); // Retrieve the most recent 5 customers (adjust as needed)
        $recentOrders = Order::orderBy('order_date', 'desc')->take(5)->get();

        return view('Admin.dashboard', [
            'recentCustomers' => $recentCustomers,
            'recentOrders' => $recentOrders
        ]);
    }
}


// <?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Product;
// use App\Models\Category;
// use App\Models\Customer;
// use App\Models\Order;
// use Illuminate\Support\Facades\Auth;


// class HomeController extends Controller
// {
//     public function showhome()
//     {
//         if (Auth::id()) {

//             $usertype = Auth()->user()->usertype;
//             if ($usertype == 'customer') {

//                 $categories = Category::all();
//                 $categoryIds = $categories->pluck('id');

//                 $lowestPrices = Product::whereIn('category_id', $categoryIds)
//                     ->selectRaw('MIN(price) as lowest_price, category_id')
//                     ->groupBy('category_id')
//                     ->get();

//                 $products = Product::all();

//                 return view('Pages.home', ['categories' => $categories, 'lowestPrices' => $lowestPrices, 'products' => $products]);
//             } else if ($usertype == 'admin') {
//                 return view('Admin.dashboard');
//             } else {

//                 return redirect()->back();
//             }
//         }
//         // Handle the case when the user is not authenticated (Auth::id() is null or false)
//         // You might want to redirect the user to a login page or take other actions here.
//     }

//     public function Recent()
//     {
//         $recentCustomers = Customer::latest()->take(5)->get(); // Retrieve the most recent 5 customers (adjust as needed)
//         $recentOrders = Order::orderBy('order_date', 'desc')->take(5)->get();

//         return view('Admin.dashboard', [
//             'recentCustomers' => $recentCustomers,
//             'recentOrders' => $recentOrders
//         ]);
//     }
// }
