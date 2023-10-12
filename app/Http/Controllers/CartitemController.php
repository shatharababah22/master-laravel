<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Cartitem;
use App\Models\Product;
use App\Models\Discount;
use Illuminate\Http\Request;

class CartitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('AllPages.cart');
    }


   
   // Import the Discount model

    public function Discount(Request $request)
    {
        // $discountCode = $request->input('discount');
        // $discount = Discount::where('Name', $discountCode)->first();
        
        // $cart = session('cart'); // Retrieve your cart data from the session
        // $cartTotal = array_reduce($cart, function ($carry, $item) {
        //     return $carry + $item['price'];
        // }, 0);
    
        // $appliedDiscount = null;
        // if ($discount) {
        //     // If a valid discount is found, calculate the discounted price
        //     $appliedDiscount = $discount;
        //     $cartTotal *= (1 - ($discount->Percent / 100));
            
        //     // Store the applied discount and cart total in the session
        //     session(['appliedDiscount' => $appliedDiscount, 'cartTotal' => $cartTotal]);
        // } else {
        //     // If no valid discount is found, clear any previously applied discount
        //     session()->forget(['appliedDiscount', 'cartTotal']);
        // }
        
         return view('AllPages.cart');
    



    




    // public function update_cart(Request $request, $product_id)
    // {
    //     // Retrieve the cart from the session
    //     $cart = session('cart');
    
    //     // Check if the product exists in the cart
    //     if (isset($cart[$product_id])) {
    //         $action = $request->input('action');
    
    //         // Perform the update based on the action
    //         if ($action === 'increment') {
    //             // Check if the quantity is less than the maximum you allow (if there is a limit)
    //             if ($cart[$product_id]['quantity'] < 10) { // Replace $maxQuantity with your actual maximum quantity
    //                 // Increase the quantity by 1
    //                 $cart[$product_id]['quantity'] += 1;
    //             }
    //         } elseif ($action === 'decrement' && $cart[$product_id]['quantity'] > 1) {
    //             // Decrease the quantity by 1, but ensure it remains at least 1
    //             $cart[$product_id]['quantity'] -= 1;
    //         }
    
    //         // Update the session cart
    //         session(['cart' => $cart]);
    //     }
    
    //     // Redirect back to the cart page
    //     return view('AllPages.cart');
    // }
    
    
    
    



    }



    public function delete_cart($id)
    {
        if (auth()->user()) {
            // If the user is authenticated, you may perform your delete operation here.
            // For now, let's just return a response.
            return redirect()->back()->with('success', 'Product deleted successfully');
        } else {
            $cart = session('cart');
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
    
            return redirect()->back()->with('success', 'Product deleted successfully');
        }
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
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function show(Cartitem $cartitem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function edit(Cartitem $cartitem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cartitem $cartitem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cartitem $cartitem)
    {
        //
    }
}
