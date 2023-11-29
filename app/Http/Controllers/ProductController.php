<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('admin.products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Admin.create-product', compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect('products')->withSuccess(' Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function showsingle($id)
    {
        $product = Product::find($id);
        $reviews = $product->reviews;
        $relatedProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();
        $averageRating = $product->reviews->avg('rating');

        return view('Pages.singleproduct', compact('product', 'reviews', 'relatedProducts', 'averageRating'));
    }



    public function showshop(Product $product)
    {

        $categories = Category::all();
        $products = Product::all();
        return view('Pages.shop', ['products' => $products, 'categories' => $categories]);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('Admin.update-product', ['product' => $product, 'categories' => $categories]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect('products')->withSuccess('Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->withSuccess('Product deleted successfully');
    }
}
