<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use App\Models\Discountproduct;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Crypt;

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
use App\Models\Admin;
use App\Models\Address;
use App\Models\Discount;
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
        // $Testimonials = Testimonial::all();

        $Testimonials = Testimonial::select(
            '*',
            DB::raw('concat(LEFT(comments, 100)) as truncated_description'),
            DB::raw('SUBSTRING(comments, 50, 1000) as showmore_description')
        )->get();

        $lastTenProducts = Product::orderBy('id', 'desc')
            ->take(20)
            ->get();

        // Shuffle the last 20 products
        $shuffledProducts = $lastTenProducts->shuffle();

        // Select the first 4 products from the shuffled list
        $products = $shuffledProducts->take(4);

        $users = User::count();
        $totalQuantity = Orderitem::sum('Quantity');
        $products_count = Product::count();

        $recycler = DB::table('users')
            ->join('recyclings', 'users.id', '=', 'recyclings.UserID')
            ->select('users.id')
            ->distinct() //different users
            ->count();

        view()->share([
            'categories' => $categories,
            'recycler' => $recycler,
            'Testimonials' => $Testimonials,
            'products' => $products,
            'users' => $users,
            'totalQuantity' => $totalQuantity,
            'products_count' => $products_count,

        ]);
        return view('AllPages.Home');
    }



    public function Allproduct($Category_ID)
    {
        $perPage = 6;
        $categories = Category::all();

        $query = DB::table('products')
            ->where('CategoryID', $Category_ID);

        $allProductsPaginator = $query->orderBy('id')->paginate($perPage);

        // $categoryProductCounts = $allProductsPaginator->total();

        return view('AllPages.Allproducts', compact('allProductsPaginator', 'categories'));
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

        $allProductsPaginator = $query->orderBy('id')->paginate($perPage);
        $allProductsCollection = $allProductsPaginator->items();
        $categoryProductCounts = $allProductsPaginator->total();

        return view('AllPages.Allproducts', compact('allProductsPaginator', 'categories', 'categoryProductCounts'));
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
        $quantity1 = $request->input('quantity', 1);


        if (Auth::check()) {

            // $user = Auth::user();
            $iduser = auth()->user()->id;
            $productId = $product->id;
            // $quantity = $request->quantity;
            $quantity = $request->input('quantity', 1);

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
        // $selectedPaymentMethod = $request->input('PaymentType');

        $paymentMethod = PaymentMethod::create([
            'PaymentType' => 'Cash',
            'UserID' => auth()->user()->id,
        ]);


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



        // return view('AllPages.order', compact('order', 'lastAddressCity', 'cart'));
    }



    public function Paymentmethod_paypal(Request $request)
    {


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
            return redirect()->route(
                'home'

            )->with('error', 'Something went wrong.');
        } else {
            return redirect()->route(
                'home'

            )->with('error', 'Something went wrong.');
        }
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

            $request->validate([
                'types' => 'required',
                'Amount' => 'required|numeric',
                'phone' =>
                'required', 'numeric', 'digits:10', 'regex:/^07/' // Ensure the number starts with '07'
                ,
            ]);

            // if ($image = $request->file('image')) {
            //     $destinationPath = 'images/';
            //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            //     $image->move($destinationPath, $profileImage);
            //     $input['image'] = "$profileImage";
            // }else{
            //     $input['image']=$request->image;

            // }


            $userID = auth()->id();
            $userType = $request->types;

            // Check if a record exists for the same user and type
            $existingRecord = Recycling::where('UserID', $userID)
                ->where('types', $userType)
                ->first();

            if ($existingRecord) {
                // If a record exists, update the "Amount"
                $existingRecord->increment('Amount', $request->Amount);
            } else {
                // If no record exists, create a new record
                Recycling::create([
                    'types' => $request->types,
                    'Amount' => $request->Amount,
                    'phone' => $request->phone,
                    // 'image' => $request->image,
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
        // Fetch user-related data
        $addresses = Address::where('UserID', auth()->user()->id)->get();
        $Recyclings = Recycling::where('UserID', auth()->user()->id)->get();

        // Fetch user orders with details
        $orders = Order::where('orders.UserID', auth()->user()->id)
            ->join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
            ->join('orderitems', 'orders.id', '=', 'orderitems.OrderID')
            ->select('orders.id', 'orders.OrderDate', 'orders.TotalAmount', 'paymentmethods.PaymentType as PaymentType', DB::raw('COUNT(orderitems.id) as items_count'))
            ->groupBy('orders.id', 'orders.OrderDate', 'orders.TotalAmount', 'paymentmethods.PaymentType')
            ->get();

        // Define recycling types and their thresholds
        $kiloesForTypes = [
            'organic' => [30, 50, 80],
            'plastic' => [30, 50, 80],
            'paper' => [30, 50, 80],
            'glass' => [30, 50, 80],
            // Add more types if needed
        ];

        // Define default values for recycling types
        $defaultValues = [
            'organic' => [30 => 10, 50 => 20, 80 => 30],
            'plastic' => [30 => 15, 50 => 25, 80 => 35],
            'paper' => [30 => 12, 50 => 22, 80 => 32],
            'glass' => [30 => 18, 50 => 28, 80 => 38],
            // Add more types and default values if needed
        ];

        // Check if user has existing discounts
        $existingDiscounts = Discount::where('UserID', auth()->user()->id)->get();

        if ($existingDiscounts->isEmpty()) {
            $categoryIDs = [
                'organic' => 1,
                'plastic' => 2,
                'paper' => 3,
                'glass' => 4,
                // Add more types if needed with respective IDs
            ];

            $user = auth()->user();

            foreach ($Recyclings as $recycling) {
                if ($recycling->types && isset($categoryIDs[$recycling->types])) {
                    $this->createDiscount($recycling, $categoryIDs[$recycling->types]);
                }
            }
        }

        // Fetch kiloes for each recycling type and percentage
        $kiloesForRecycling = $this->fetchKiloesForRecycling($defaultValues);

        // Pass data to the view
        return view('AllPages.profile_user', compact('addresses', 'Recyclings', 'orders', 'kiloesForRecycling'));
    }


    private function fetchKiloesForRecycling($defaultValues)
    {
        $kiloesForRecycling = [];

        foreach ($defaultValues as $type => $percentages) {
            foreach ($percentages as $percent => $kiloes) {
                $kiloesForRecycling[$type][$percent] = $this->fetchKiloesFromCoupon($type, $percent) ?? $kiloes;
            }
        }

        return $kiloesForRecycling;
    }


    private function fetchKiloesFromCoupon($type, $percent)
    {
        return Coupon::where('percent', $percent)
            ->whereHas('recycling', function ($query) use ($type) {
                $query->where('types', $type);
            })
            ->pluck('Kiloes')
            ->first();
    }

    private function createDiscount($recycling, $categoryID)
    {
        $user = auth()->user();
        $discountName = $user->name . '\'s_Discount_' . $user->id;
        $encryptedName = md5($discountName) . $user->name;

        // Determine the appropriate percentage based on recycling amount thresholds
        $percent = 0;

        // Check and create discounts for each applicable threshold
        if ($recycling->Amount >= 80) {
            $percent = 80;
            $this->saveDiscount($percent, $user, $categoryID, $encryptedName);
        }

        if ($recycling->Amount >= 50) {
            $percent = 50;
            $this->saveDiscount($percent, $user, $categoryID, $encryptedName);
        }

        if ($recycling->Amount >= 30) {
            $percent = 30;
            $this->saveDiscount($percent, $user, $categoryID, $encryptedName);
        }
    }

    private function saveDiscount($percent, $user, $categoryID, $encryptedName)
    {
        if ($percent > 0) {
            Discount::create([
                'name' => $encryptedName . $percent . $user->id,
                'Percent' => $percent,
                'active' => true,
                'CategoryID' => $categoryID,
                'UserID' => $user->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
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
