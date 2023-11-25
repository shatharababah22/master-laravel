<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\Discountproduct;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Cartitem;
use App\Models\Orderitem;
use App\Models\Paymentmethod;
use App\Models\Recycling;
use App\Models\Review;
use App\Models\User;
use App\Models\Address;
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
        $categories = Category::all();
        $Testimonials = Testimonial::all();

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
        $products_count = Product::count();


        view()->share([
            'categories' => $categories,
            'Testimonials' => $Testimonials,
            'products' => $products,
            'users' => $users,
            'totalQuantity' => $totalQuantity,
            'products_count' => $products_count,

        ]);
        return view('AllPages.Home');
    }

    // public function index2(){


    //     $cartCount = Auth::check()
    //     ? Cartitem::where('UserID', Auth::user()->id)->count()
    //     : count(session('cart'));

    // return view('layouts.navbar', compact('cartCount'));
    // }





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
        $perPage = 6;
        $categories = Category::all();

        $query = DB::table('products')
            ->where('CategoryID', $Category_ID);



        $allProductsCollection = $query->orderBy('id')->paginate($perPage);
        $categoryProductCounts = $query->count();

        return view('AllPages.Allproducts', compact('allProductsCollection', 'categories', 'categoryProductCounts'));
    }


    public function search(Request $request)
    {
        $perPage = 6;
        $categories = Category::all();
        $query = DB::table('products');

        // Check if the search parameter is present
        if ($request->has('search')) {
            $search = $request->input('search');
            // Add a condition to filter products based on the search term
            $query->where('Name', 'like', '%' . $search . '%');
        }
        // Check if a min_price query parameter is present
        if (isset($request->min_price) && $request->min_price != null) {
            $minPrice = $request->min_price;

            // Add a condition to filter products with prices greater than or equal to the minimum price
            $query->where('Price', '>=', $minPrice);
        }

        // Check if a max_price query parameter is present
        if (isset($request->max_price) && $request->max_price != null) {
            $maxPrice = $request->max_price;

            // Add a condition to filter products with prices less than or equal to the maximum price
            $query->where('Price', '<=', $maxPrice);
        }


        // Handle price range and other filters as you are already doing.

        $allProductsCollection = $query->orderBy('id')->paginate($perPage);
        $categoryProductCounts = $query->count();

        return view('AllPages.Allproducts', compact('allProductsCollection', 'categories', 'categoryProductCounts'));
    }






    public function product_detail($id)
    {
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            // Handle the case where the product does not exist, e.g., return a 404 response
            abort(404);
        }

        // Retrieve reviews related to the product
        $reviews = DB::table('reviews')
            ->join('users', 'reviews.UserID', '=', 'users.id')
            ->select('reviews.*', 'users.name as userName', 'users.Image')
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


    public function product_comment(Request $request, $id)
    {
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
            return redirect()->route('productdetail', ['id_product' => $id])->with('success', 'Review added successfully.');
        } else {
            // Store the intended URL in the session
            session()->put('intended_url', route('productdetail', ['id_product' => $id]));

            // Redirect to the login page
            return redirect()->route('login')->with('error', 'You must be logged in to leave a review.');
        }
    }



    public function add_cart(Request $request, $id)
    {
        $product = Product::find($id);
        $quantity1 = $request->quantity;

        if (Auth::check()) {

            // $user = Auth::user();
            $iduser = auth()->user()->id;
            $productId = $product->id;
            $quantity = $request->quantity;

            // Check if the product already exists in the cart
            $existingCart = Cartitem::where('UserID', $iduser)
                ->where('ProductID', $productId)
                ->first();

            if ($existingCart) {
                // Product already exists in the cart, so increment the quantity
                $existingCart->update([
                    'Quantity' => $existingCart->Quantity + $quantity
                ]);
            } else {
                // Product does not exist in the cart, so create a new record
                Cartitem::create([
                    'UserID' => $iduser,
                    'ProductID' => $productId,
                    'Quantity' => $quantity
                ]);
            }

            return redirect()->back()->with('success', 'Product added to the cart successfully');
        } else {
            $cart = session()->get('cart', []);

            if (isset($cart[$id])) {
                $cart[$id]['quantity'] += $quantity1;
            } else {
                $cart[$id] = [
                    'id' => $product->id,
                    'image1' => $product->image1,
                    'Name' => $product->Name,
                    'quantity' => $quantity1,
                    'price' => $product->Price,
                ];
            }

            session()->put('cart', $cart);
            // dd($cart);

            return redirect()->back()->with('success', 'Product added to the cart successfully');
        }
    }











    public function addresess($id)
    {
        $user = auth()->user();
        $cartCount = Cartitem::where('UserID', $user->id)->count();
    
        if ($cartCount === 0) {
            return redirect()->back()->with('cartEmpty', 'Please add items to your cart before proceeding.');
        }
    
        $addresses = Address::where('UserID', auth()->user()->id)->get();
        return view('AllPages.checkout', compact('addresses'));
    }
    




public function CheckoutAddress(Request $request)
{
    // Retrieve the selected address ID
    $selectedAddressId = $request->input('UserID');

    // Check if the user has selected an existing address
    if ($selectedAddressId) {
        // Retrieve the selected address from the database using $selectedAddressId
        $selectedAddress = Address::find($selectedAddressId);

        if ($selectedAddress) {
            $request->session()->put('last_address', $selectedAddress);
        }
    } else {
        // If a new address is provided, validate and store it
        $validatedData = $request->validate([
            'city' => 'required',
            'street' => 'required',
            'address1' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
        ]);

        $existingAddress = Address::where([
            'UserID' => auth()->user()->id,
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'],
            'street' => $validatedData['street'],
            'city' => $validatedData['city'],
            'address1' => $validatedData['address1'],
        ])->first();

        if (!$existingAddress) {
            // Create and store the new address
            $newAddress = Address::create([
                'UserID' => auth()->user()->id,
                'email' => $validatedData['email'],
                'mobile' => $validatedData['mobile'],
                'street' => $validatedData['street'],
                'city' => $validatedData['city'],
                'address1' => $validatedData['address1'],
            ]);

            $request->session()->put('last_address', $newAddress);
        } else {
            // Address already exists, use the existing address
            $request->session()->put('last_address', $existingAddress);
        }
    }

    $lastAddress = $request->session()->get('last_address');
    $lastAddressCity = $lastAddress ? $lastAddress->city : null;

    // Redirect back and provide the last address city
    return redirect()->route('paymentmethodmain')->with('lastAddressCity', $lastAddressCity)->with('success', 'Please determine the payment method');
}



    public function Paymentmethod(Request $request)
    {
        $selectedPaymentMethod = $request->input('PaymentType');
    
        $paymentMethod = PaymentMethod::create([
            'PaymentType' => $selectedPaymentMethod,
            'UserID' => auth()->user()->id,
        ]);
    
        if ($selectedPaymentMethod == 'Cash') {
            $lastAddress = $request->session()->get('last_address');
    
            $lastAddressCity = $lastAddress ? $lastAddress->city : null;
    
            $user = auth()->user();
            $cart = Cartitem::where('UserID', $user->id)->with('product')->get();
    
            $totalprice = 0;
            $shipment = 2;
    
            foreach ($cart as $item) {
                $itemPrice = isset($item->product) ? $item->product->Price * $item->Quantity : $item['price'] * $item['quantity'];
                $totalprice += $itemPrice;
            }
    
            // Adding shipment cost once per order
            $totalprice += $shipment * count($cart);
    
            $order = Order::create([
                'OrderDate' => now(),
                'TotalAmount' => $totalprice,
                'UserID' => $user->id,
                'billingsId' => $lastAddress->id ?? null, // Assuming billingsId is the address ID
                'PaymentMethodID' => $paymentMethod->id,
            ]);
    
            foreach ($cart as $item) {
                $orderItem = OrderItem::create([
                    'Quantity' => $item->Quantity, // Replace with the correct property name
                    'Subtotal' => $item->Quantity * $item->product->Price, // Calculate subtotal based on product price
                    'OrderID' => $order->id,
                    'ProductID' => $item->product->id,
                ]);
            }

            return redirect()->route('orders', [
                'order' => $order,
                'cart' => $cart,
                'lastAddressCity' => $lastAddressCity,
    
            ]);
        } else {

            $lastAddress = $request->session()->get('last_address');
    
            $lastAddressCity = $lastAddress ? $lastAddress->city : null;
    
            $user = auth()->user();
            $cart = Cartitem::where('UserID', $user->id)->with('product')->get();
    
            $totalprice = 0;
            $shipment = 2;
    
            foreach ($cart as $item) {
                $itemPrice = isset($item->product) ? $item->product->Price * $item->Quantity : $item['price'] * $item['quantity'];
                $totalprice += $itemPrice;
            }
    
            // Adding shipment cost once per order
            $totalprice += $shipment * count($cart);
    
            $order = Order::create([
                'OrderDate' => now(),
                'TotalAmount' => $totalprice,
                'UserID' => $user->id,
                'billingsId' => $lastAddress->id ?? null, // Assuming billingsId is the address ID
                'PaymentMethodID' => $paymentMethod->id,
            ]);
    
            foreach ($cart as $item) {
                $orderItem = OrderItem::create([
                    'Quantity' => $item->Quantity, // Replace with the correct property name
                    'Subtotal' => $item->Quantity * $item->product->Price, // Calculate subtotal based on product price
                    'OrderID' => $order->id,
                    'ProductID' => $item->product->id,
                ]);
            }
            $provider = new PayPalClient;
            $provider->setApiCredentials(config('paypal'));
            $paypalToken = $provider->getAccessToken();
    
            $response = $provider->createOrder([
                "intent" => "CAPTURE",
                "application_context" => [
                    "return_url" => route('successTransaction'),
                    "cancel_url" => route('cancelTransaction'),
                ],
                "purchase_units" => [
                    0 => [
                        "amount" => [
                            "currency_code" => "USD", // Use the appropriate currency code
                            "value" => "1000.00" // Set the correct value for the transaction
                        ]
                    ]
                ]
            ]);
    
            if (isset($response['id']) && $response['id'] != null) {
                foreach ($response['links'] as $links) {
                    if ($links['rel'] == 'approve') {
                        return redirect()->away($links['href']);
                    }
                }
                   return redirect()->route('orders', [
                'order' => $order,
                'cart' => $cart,
                'lastAddressCity' => $lastAddressCity,
    
            ])->with('error', 'Something went wrong.');
            } else {
                   return redirect()->route('orders', [
                'order' => $order,
                'cart' => $cart,
                'lastAddressCity' => $lastAddressCity,
    
            ])->with('error', $response['message'] ?? 'Something went wrong.');
            }
       
        
        }
       

        // return view('AllPages.order', compact('order', 'lastAddressCity', 'cart'));
    }
    



    public function Order(Order $order)
    {
        $user = auth()->user();


        // Retrieve the cart items for the user
        $cart = Cartitem::where('UserID', $user->id)->get();



        $lastAddressCity = request('lastAddressCity'); // Get the lastAddressCity variable

        return view('AllPages.order', compact('order', 'lastAddressCity', 'cart'));
    }





    public function Confirm(Order $order)
    {
        $orderData = Order::select('orders.*', 'paymentmethods.PaymentType', 'addresses.city')
            ->join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
            ->join('addresses', 'orders.billingsId', '=', 'addresses.id')
            ->where('orders.id', $order->id)
            ->first();
        $user = auth()->user();

        // Retrieve the cart items for the user
        $cartItems = Cartitem::where('UserID', $user->id)->get();

        // Delete the cart items associated with the user
        $cartItems->each(function ($cartItem) {
            $cartItem->delete();
        });

        return view('AllPages.wow', compact('orderData'));
    }




    public function Recycling(Request $request)
    {
        if (auth()->check()) {
            $validatedData = $request->validate([
                'types' => 'required',
                'Amount' => 'required|numeric',
                'phone' => 'required',
            ]);

            $userID = auth()->id();
            $userType = $validatedData['types'];

            // Check if a record exists for the same user and type
            $existingRecord = Recycling::where('UserID', $userID)
                ->where('types', $userType)
                ->first();

            if ($existingRecord) {
                // If a record exists, update the "Amount"
                $existingRecord->increment('Amount', $validatedData['Amount']);
            } else {
                // If no record exists, create a new record
                Recycling::create([
                    'types' => $userType,
                    'Amount' => $validatedData['Amount'],
                    'phone' => $validatedData['phone'],
                    'UserID' => $userID,
                ]);
            }

            return redirect()->route('form_recycling')->with('success', 'Data has been saved successfully');
        } else {
            return redirect()->route('login')->with('message', 'Please log in to insert data');
        }
    }

    public function user_address()
    {



        $addresses = Address::where('UserID', auth()->user()->id)->get();
        $Recyclings = Recycling::where('UserID', auth()->user()->id)->get();

        $Orders = Order::where('orders.UserID', auth()->user()->id)
            ->join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
            ->join('orderitems', 'orders.id', '=', 'orderitems.OrderID')
            ->select('orders.id', 'orders.OrderDate', 'orders.TotalAmount', 'paymentmethods.PaymentType as PaymentType', DB::raw('COUNT(orderitems.id) as items_count'))
            ->groupBy('orders.id', 'orders.OrderDate', 'orders.TotalAmount', 'paymentmethods.PaymentType')
            ->get();
            $kiloesForTypes = [
                'organic' => [30, 50, 80], // Define percentages for each type
                'plastic' => [30, 50, 80],
                'paper' => [30, 50, 80],
                'glass' => [30, 50, 80],
                // Add more types if needed
            ];
        
            $kiloesForRecycling = [];
        
            foreach ($kiloesForTypes as $type => $percentages) {
                foreach ($percentages as $percent) {
                    $kiloesForRecycling[$type][$percent] = $this->fetchKiloesForRecycling($type, $percent);
                }
            }
        
            // Now you have an array $kiloesForRecycling containing kiloes for each type and percentage
        
            return view('AllPages.profile_user', compact('addresses', 'Recyclings', 'Orders', 'kiloesForRecycling'));
        }
        
        private function fetchKiloesForRecycling($type, $percent)
        {
            return Coupon::where('percent', $percent)
                ->whereHas('recycling', function ($query) use ($type) {
                    $query->where('types', $type);
                })
                ->pluck('Kiloes')
                ->first() ?? "Default Value for $type $percent%";
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