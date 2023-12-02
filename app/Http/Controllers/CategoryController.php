<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Dashboard.category.category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.category.Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'Name' => 'required |max:30',
        //     'description' => 'required |max:300',
        //     // 'Image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // ]);

        $input = $request->all();

        if ($image = $request->file('Image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['Image'] = "$profileImage";
        }

        Category::create($input);

        return redirect()->route('category.index')
            ->with('success', 'Category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('Dashboard.category.Edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // $request->validate([
        //     'Name' => 'required |max:30',
        //     'description' => 'required |max:300',
        //     // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        // ]);

        $input = $request->all();
        dd($category);
        if ($Image = $request->file('Image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $Image->getClientOriginalExtension();
            $Image->move($destinationPath, $profileImage);
            $input['Image'] = "$profileImage";
        } else {
            $input['Image'] = $category->Image;
        }

        $category->update($input);

        return redirect()->route('category.index')
            ->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::select('*')
            ->where('CategoryID', $id)
            ->get();
        if ($products->count() != 0) {;

            // Redirect to the 'category.index' route
            return redirect()->route('category.index')->with(['cancel' => 'You have items under this category']);
        }
        Category::destroy($id);

        return redirect()->route('category.index')->with(['deleted' => 'Deleted successfully']);
    }
}
