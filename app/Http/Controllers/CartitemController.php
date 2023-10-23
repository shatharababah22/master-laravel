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


    // public function deletecart($id)
    // {
    //     if (auth()->user()) {
    //         $product = Cartitem::find($id);
    
    //         if ($product) {
    //             $product->delete();
    //             return redirect()->back()->with('success', 'Product deleted successfully');
    //         } else {
    //             return redirect()->back()->with('error', 'Product not found or already deleted');
    //         }
    //     } else {
    //         $cart = session('cart');
    
    //         if (isset($cart[$id])) {
    //             unset($cart[$id]);
    //             session()->put('cart', $cart);
    //             return redirect()->back()->with('success', 'Product deleted successfully');
    //         } else {
    //             return redirect()->back()->with('error', 'Product not found or already deleted');
    //         }
    //     }
    // }
    
    
   // Import the Discount model




    // public function delete_cart($id)
    // {
    //     if (auth()->user()) {
    //         // If the user is authenticated, you may perform your delete operation here.
    //         // For now, let's just return a response.
    //         return redirect()->back()->with('success', 'Product deleted successfully');
    //     } else {
    //         $cart = session('cart');
    //         if (isset($cart[$id])) {
    //             unset($cart[$id]);
    //             session()->put('cart', $cart);
    //         }
    
    //         return redirect()->back()->with('success', 'Product deleted successfully');
    //     }
    // }

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
    public function update(Request $request, $id)
    {

        $updatedQuantity = $request->input('quantity');
    
        if (auth()->user()) {

            $user = auth()->user();
            $cartItem = Cartitem::where('UserID', $user->id)->where('ProductID', $id)->first();
    
            if ($cartItem) {
                $cartItem->update(['Quantity' => $updatedQuantity]);
            }
        } else {

            $cart = session('cart');
            if ($cart !== null) {
                foreach ($cart as $key => $item) {
                    if ($item['id'] == $id) {
                        $cart[$key]['quantity'] = $updatedQuantity;
                        session(['cart' => $cart]);
                        break;
                    }
                }
            }
        }
    
        return redirect()->back()->with('success', 'Product added to the cart successfully');
    }
    
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cartitem  $cartitem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()) {
            // If the user is authenticated, delete the item from the database
            $user = auth()->user();
            Cartitem::where('UserID', $user->id)->where('ProductID', $id)->delete();
        } else {
            // If the user is not authenticated, delete the item from the session
            $cart = session('cart');
            if ($cart !== null) {
                foreach ($cart as $key => $item) {
                    if ($item['id'] == $id) {
                        unset($cart[$key]);
                        session(['cart' => $cart]);
                        break;
                    }
                }
            }
        }
    
        return redirect()->back()->with('success', 'Product added to the cart successfully');
    }
    
}
