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
       
    
        $imageNames = [];

        for ($i = 1; $i <= 5; $i++) {
            $image = $request->file("image{$i}");
    
            if ($image) {
                $imageName = time() . "_{$i}." . $image->getClientOriginalExtension();
                $image->move(public_path('images/'), $imageName);
    
                // Store the image name in the array with the loop index as the key
                $imageNames[] = $imageName;
            }
        }
    
        // Create the product with the provided data including image names
        Product::create([
            // 'id' => $input['id'],
            'Name' => $input['Name'],
            'Price' => $input['Price'],
            'description' => $input['description'],
            'Stockquantity' => $input['Stockquantity'],
            'image1' => isset($imageNames[0]) ? $imageNames[0] : null,
            'image2' => isset($imageNames[1]) ? $imageNames[1] : null,
            'image3' => isset($imageNames[2]) ? $imageNames[2] : null,
            'image4' => isset($imageNames[3]) ? $imageNames[3] : null,
            'image5' => isset($imageNames[4]) ? $imageNames[4] : null,
            'MADEFROM' => $input['MADEFROM'],
            'Brand' => $input['Brand'],
            'ItemId' => $input['ItemId'],
            'NOTES' => $input['NOTES'],
            'status' => $input['status'],
            'CategoryID' => $input['CategoryID'],
        ]);
    
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
        // Get all the input data from the request
        $input = $request->all();
    
        // Update each column one by one based on the input data
        $product->update([
            'Name' => $input['Name'],
            'Price' => $input['Price'],
            'description' => $input['description'],
            'Stockquantity' => $input['Stockquantity'],
            'MADEFROM' => $input['MADEFROM'],
            'Brand' => $input['Brand'],
            'ItemId' => $input['ItemId'],
            'NOTES' => $input['NOTES'],
            'status' => $input['status'],
            'CategoryID' => $input['CategoryID'],
        ]);
    
        // Handle image uploads
        $imageNames = [];
    
        for ($i = 1; $i <= 5; $i++) {
            $image = $request->file("image{$i}");
    
            if ($image) {
                $imageName = time() . "_{$i}." . $image->getClientOriginalExtension();
                $image->move(public_path('images/'), $imageName);
    
                // Store the image name in the array with the loop index as the key
                $imageNames[] = $imageName;
            }
        }
    
        // Update image columns separately
        $imageColumns = ['image1', 'image2', 'image3', 'image4', 'image5'];
    
        foreach ($imageColumns as $key => $column) {
            if (isset($imageNames[$key])) {
                $product->update([$column => $imageNames[$key]]);
            }
        }
    
        return redirect()->route('productadmin.index')
                        ->with('success', 'Product updated successfully.');
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
