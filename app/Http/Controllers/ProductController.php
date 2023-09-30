<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('Dashboard.Product.product', compact('products')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('Dashboard.Product.Create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $imagePaths = [];
    
        // Loop through each uploaded file and save them
        for ($i = 1; $i <= 5; $i++) {
            $imageKey = "image$i";
    
            if ($image = $request->file($imageKey)) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "_$i." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $imagePaths[] = "$destinationPath$profileImage";
            }
        }
  
    
        Product::create($input);
    
        return redirect()->route('productadmin.index')
                        ->with('success', 'Product created successfully.');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $productadmin)
    {
        $categories = Category::all();
return view('Dashboard.Product.Edit', compact('productadmin', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
     
        return redirect()->route('productadmin.index')->with(['deleted' => 'Deleted successfully']);
    }
}
