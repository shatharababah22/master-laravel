<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $products = Product::select(
            '*',
            DB::raw('concat(LEFT(description, 105)) as truncated_description'),
            DB::raw('SUBSTRING(description, 50, 1000) as showmore_description')
        )->get();


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


        $this->validate($request, [
            'Name' => 'required',
            'Price' => 'required|numeric',
            'description' => 'required',
            'Stockquantity' => 'required|numeric',
            'CategoryID' => 'required',
        ]);


        // dd($input);
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

        Product::create([
            // 'id' => $input['id'],
            'Name' => $input['Name'],
            'Price' => $input['Price'],
            'description' => $input['description'],
            'Stockquantity' => $input['Stockquantity'],
            'image1' => isset($imageNames[0]) ? $imageNames[0] : null,
            'image2' => isset($imageNames[1]) ? $imageNames[1] : null,
            'MADEFROM' => $input['MADEFROM'],
            'ItemId' => $input['ItemId'],
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
        // $product=Product::find($product);

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
    public function update(Request $request, Product $productadmin)
    {
        $input = $request->all();

        $productadmin->update([
            'Name' => $input['Name'],
            'Price' => $input['Price'],
            'description' => $input['description'],
            'Stockquantity' => $input['Stockquantity'],
            'MADEFROM' => $input['MADEFROM'],
            'ItemId' => $input['ItemId'],
            'CategoryID' => $input['CategoryID'],
        ]);

    //     // Update image1 if provided
        if ($image1 = $request->file('image1')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage);
            $productadmin->update(['image1' => $destinationPath . $profileImage]);
        }
    
        // Update image2 if provided
        if ($image2 = $request->file('image2')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage);
            $productadmin->update(['image2' => $destinationPath . $profileImage]);
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
