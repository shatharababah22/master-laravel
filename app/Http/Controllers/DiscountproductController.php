<?php

namespace App\Http\Controllers;

use App\Models\Discountproduct;
use App\Models\Category;
use App\Models\Orderitem;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Product;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class DiscountproductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $categories= Category::all();
          $Testimonials= Testimonial::all();

         // Retrieve the last 10 products and randomize their order
// $products = Product::orderBy('id', 'desc') // Assuming 'id' is the primary key
// ->take(10)
// ->inRandomOrder()
// ->take(4)
// ->get();

// $seed = rand();
// $products = Product::orderByRaw("RAND($seed)")
//     ->take(4)
//     ->get();

// Retrieve the last 10 products ordered by ID (you can change the order criteria)
$lastTenProducts = Product::orderBy('id', 'desc')
    ->take(10)
    ->get();

// Shuffle the last 10 products
$shuffledProducts = $lastTenProducts->shuffle();

// Select the first 4 products from the shuffled list
$products = $shuffledProducts->take(4);

$users = User::count();
$totalQuantity = Orderitem::sum('Quantity');

           
        view()->share([
            'categories' => $categories,
            'Testimonials' => $Testimonials,
            'products' => $products,
            'users' => $users,
            'totalQuantity' => $totalQuantity,
            
        ]);
          return view('AllPages.Home'); 
    }

    public function Allproduct($Category_ID)
    {
        // Initialize an empty array to store all products
        $allProducts = [];
    
        // Retrieve products related to the specified category in chunks
        Product::where('CategoryID', $Category_ID)->chunk(100, function ($products) use (&$allProducts) {
            // Process each chunk of products
            foreach ($products as $product) {
                $allProducts[] = $product;
            }
        });
    
        // You can pass the $allProducts data to your view
        $allProductsCollection = collect($allProducts);

        return view('AllPages.Allproducts', compact('allProductsCollection'));
        
    }
    


    public function product_detail($id)
    {
      
        $products = Product::find($id);
    
        // Check if the product exists
        if (!$products) {
            // Handle the case where the product does not exist, e.g., return a 404 response
            abort(404);
        }
        // dd($products);

        return view('AllPages.Detail', ['products' => $products]);
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Discountproduct  $discountproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Discountproduct $discountproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Discountproduct  $discountproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Discountproduct $discountproduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Discountproduct  $discountproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Discountproduct $discountproduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Discountproduct  $discountproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discountproduct $discountproduct)
    {
        //
    }
}
