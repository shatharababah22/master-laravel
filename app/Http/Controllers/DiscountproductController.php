<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\Discountproduct;
use App\Models\Category;
use App\Models\Orderitem;
use App\Models\Review;
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

    // public function Allproduct($Category_ID)
    // {
    //     // Initialize an empty array to store all products
    //     $allProducts = [];
    
    //     // Retrieve products related to the specified category in chunks
    //     Product::where('CategoryID', $Category_ID)->chunk(100, function ($products) use (&$allProducts) {
    //         // Process each chunk of products
    //         foreach ($products as $product) {
    //             $allProducts[] = $product;
    //         }
    //     });
    
    //     // You can pass the $allProducts data to your view
    //     $allProductsCollection = collect($allProducts);

    //     return view('AllPages.Allproducts', compact('allProductsCollection'));
        
    // }
    
    public function Allproduct($Category_ID)
    {
        // Initialize an empty array to store all products
        $allProducts = [];
    
        // Define the number of products per page
        $perPage = 9;
    
        // Retrieve products related to the specified category in chunks
        DB::table('products')
            ->where('CategoryID', $Category_ID)
            ->orderBy('id') // You should order by a unique column (e.g., 'id')
            ->chunk(100, function ($products) use (&$allProducts, $perPage) {
                // Manually paginate the products within the chunk
                $chunkedProducts = array_chunk($products->toArray(), $perPage); // Convert to array
    
                // Process and display each chunk of products
                foreach ($chunkedProducts as $chunk) {
                    foreach ($chunk as $product) {
                        $allProducts[] = $product;
                    }
                    // You can pass this chunk of products to your view
                    // Process and display each chunk of products in your view
                    // For example, you can return a partial view
                }
            });
    
        $allProductsCollection = collect($allProducts);
    
        // Optionally, you can return the main view, but paginated content will be displayed through AJAX or partial views
        return view('AllPages.Allproducts', compact('allProductsCollection'));
    }
    


    public function product_detail($id)
    {
        $product = Product::find( $id);
          
        // Check if the product exists
        if (!$product) {
            // Handle the case where the product does not exist, e.g., return a 404 response
            abort(404);
        }
        
        // Retrieve reviews related to the product
        $reviews = DB::table('reviews')
        ->join('users', 'reviews.UserID', '=', 'users.id')
        ->select('reviews.*', 'users.name as userName','users.Image')
        ->where('ProductID', $id)
        ->get();

        // Wrap the product in a collection to make it iterable in the view
        $products = collect([$product]);
    
  
    // Fetch products with the same category_id
    $relatedProducts = Product::where('CategoryID', $product->CategoryID)
    ->where('id', '<>', $id) // Exclude the current product
    ->inRandomOrder() // Randomly order the results
    ->take(4) // Limit the result to 4 products
    ->get();
    


    return view('AllPages.Detail', ['products' => $products, 'relatedProducts' => $relatedProducts, 'reviews' => $reviews]);
}
 


public function product_comment(Request $request, $id){
  if (Auth::check()) {
    // User is already logged in, create the review and redirect to product detail
    Review::create([
        'comments' => $request->input('comments'),
        'Rating' => $request->input('Rating'),
        'date' => now(),
        'UserID' => auth()->id(),
        'ProductID' => $id,
        // Add other fields as needed
    ]);

    // Redirect to the product detail page
    return redirect()->route('productdetail', ['id' => $id])->with('success', 'Review added successfully.');
} else {
    // User is not logged in, store the intended URL and redirect to the login page with an error message
    session()->put('intended_url', route('productdetail', ['id' => $id]));
    return redirect()->route('login')->with('error', 'You must be logged in to leave a review.');
}

}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          
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
