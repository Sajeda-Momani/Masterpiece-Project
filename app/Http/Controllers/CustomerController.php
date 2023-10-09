<?php

namespace App\Http\Controllers;

use App\Models\Order;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin.customers', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create-customer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Customer::create($request->all());
        return redirect('customers')->withSuccess('Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index')->withSuccess('customer deleted successfully');
    }

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
