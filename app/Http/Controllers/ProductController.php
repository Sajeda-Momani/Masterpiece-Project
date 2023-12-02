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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'brand' => 'required',
            'brief' => 'required',
            'quantity_in_stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image1' => 'required|image',
            'image2' => 'image',
            'image3' => 'image',
            'image4' => 'image',
        ]);
    
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->brand = $request->input('brand');
        $product->brief = $request->input('brief');
        $product->quantity_in_stock = $request->input('quantity_in_stock');
        $product->category_id = $request->input('category_id');
    
        // Handle image uploads
        $product->image1 = $this->uploadImage($request->file('image1'), 'uploads');
        $product->image2 = $this->uploadImage($request->file('image2'), 'uploads');
        $product->image3 = $this->uploadImage($request->file('image3'), 'uploads');
        $product->image4 = $this->uploadImage($request->file('image4'), 'uploads');
    
        $product->save();
    
        return redirect('products')->withSuccess('Product Added Successfully');
    }
    
    // public function uploadImage(Request $request, $inputName, $path)
    // {
    //     if ($request->hasFile($inputName)) {

    //         $image = $request->{$inputName};
    //         $ext = $image->getClientOriginalExtension();
    //         $imageName = 'media_' . uniqid() . '.' . $ext;
    //         $image->move(public_path($path), $imageName);

    //         return asset($path . "/" . $imageName);
    //     }
    // }
    public function uploadImage($file, $path)
    {
        $imageName = 'media_' . uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($path), $imageName);
    
        return asset($path . '/' . $imageName);
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

        return view('Pages.Shop.singleproduct', compact('product', 'reviews', 'relatedProducts', 'averageRating'));
    }



    public function showshop(Product $product)
    {

        $categories = Category::all();
        $products = Product::paginate(6); 
        return view('Pages.Shop.shop', ['products' => $products, 'categories' => $categories]);
    }

    // public function sortBy(Request $request)
    // {
    //     $sortOption = $request->input('sort_option');
    
    //     // Implement logic to retrieve products based on the sort option
    //     $products = Product::orderBy('name', 'asc')->get(); // Adjust this based on your needs
    
    //     return view('Pages.shop', ['products' => $products]);
    // }
    public function sortBy(Request $request)
    {
        // Get all products initially
        $products = Product::all();
    
        // Check if a sorting option is provided in the request
        $sortOption = $request->input('sort_option');
    
        if ($sortOption) {
            // Implement sorting logic based on the selected option
            switch ($sortOption) {
                case 'name_asc':
                    $products = $products->sortBy('name');
                    break;
                case 'name_desc':
                    $products = $products->sortByDesc('name');
                    break;
                case 'price_low_high':
                    $products = $products->sortBy('price');
                    break;
                case 'price_high_low':
                    $products = $products->sortByDesc('price');
                    break;
                case 'created_at_new':
                    $products = $products->sortByDesc('created_at');
                    break;
                case 'created_at_old':
                    $products = $products->sortBy('created_at');
                    break;
                // Add more cases as needed for additional sorting options
            }
        }
    
        $categories = Category::all();
        
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
