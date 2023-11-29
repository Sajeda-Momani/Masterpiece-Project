<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return view('admin.categories.categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create-category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Create a new category object
        $category = Category::create(([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
        ]));

        // Handle main image
        if ($request->hasFile('image')) {
            $mainImageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('storage\images\categories'), $mainImageName);

            $category->image = $mainImageName;
        }

        // Save the category object to the database
        $category->save();

        // Redirect or return a response as needed

        return redirect('categories')->withSuccess('Category added successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    // public function showhome()
    // {
    //     $categories = Category::all();
    //     return view('Pages.home', ['categories'=>$categories]);

    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {

        return view('Admin.update-category', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return redirect('categories')->withSuccess('Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('categories.index')->withSuccess('Category deleted successfully');
    }
}
