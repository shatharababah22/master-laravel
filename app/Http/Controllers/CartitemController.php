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
        
if (auth()->user()) {
    $user = auth()->user();

    $cart = Cartitem::where('UserID', $user->id)->with('product')->get();

    // $cartCount = count($cart);
    // Now, $cartCount contains the count of items in the cart
}

else{

    $cart = session('cart');

}
   

// dd(isset($cart->product));

        return view('AllPages.cart',compact('cart'));
    }


    public function deletecart($id)
    {
        if (auth()->user()) {
            $product = Cartitem::find($id);
    
            if ($product) {
                $product->delete();
                return redirect()->back()->with('success', 'Product deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Product not found or already deleted');
            }
        } else {
            $cart = session('cart');
    
            if (isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
                return redirect()->back()->with('success', 'Product deleted successfully');
            } else {
                return redirect()->back()->with('error', 'Product not found or already deleted');
            }
        }
    }
    
    
   // Import the Discount model




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
