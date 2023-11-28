<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use App\Models\Address;
use App\Models\Orderitem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $orders = Order::join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
        ->join('orderitems', 'orders.id', '=', 'orderitems.OrderID')
        ->join('users', 'users.id', '=', 'orders.UserID')
        ->select(
            'orders.id',
            'orders.OrderDate',
            'orders.TotalAmount',
            'paymentmethods.PaymentType as PaymentType',
            'users.email', // Include the email column
            DB::raw('COUNT(orderitems.id) as items_count')
        )
        ->groupBy('orders.id', 'orders.OrderDate', 'orders.TotalAmount', 'paymentmethods.PaymentType', 'users.email')
        ->get();
    
        
        return view("Dashboard.orders.order")->with("orders", $orders);
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
        // $input = $request->all();

       

        // Order::create($input);

        // return redirect()->route('order.index')
        //                 ->with('success','Order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($order)
    {
        $user = User::where('Email', $order)->first();

    if ($user) {
        // Find the user's orders
        $userOrders = Order::where('UserID', $user->id)->get();

        // Find the order items related to the user's orders
       
        $orderItems = Orderitem::whereIn('OrderID', $userOrders->pluck('id'))
        ->with('products') // Assuming you have a relationship named 'product' in your OrderItem model
        ->get();
        return view('Dashboard.orders.show', compact('orderItems', 'user'));
    } else {
        // Handle the case where the user with the specified email is not found.
        return redirect()->route('order.index')->with('error', 'User not found.');
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
{
    return view('Dashboard.orders.edit', compact('order'));
}


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $input = $request->all();

    // Update the order record
    $order->update([
        'OrderDate' => $input['OrderDate'],
        'TotalAmount' => $input['TotalAmount'],
        'Status' => $input['Status'],
    ]);

    // Find the user associated with this order and update their email
    $user = User::find($order->UserID);
    $user->update([
        'Email' => $input['Email'],
    ]);

    // Find the address associated with this order and update address1
    $address = Address::find($order->billingsId);
    $address->update([
        'address1' => $input['address1'],
    ]);

    return redirect()->route('order.index')
                    ->with('success','Order updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Orderitem::select('*')
        ->where('OrderID', $id)
        ->get();
        if ($products->count()!= 0) {
          ;

            // Redirect to the 'category.index' route
            return redirect()->route('order.index')->with(['cancel' => 'You have items under this order']);
           
        }
        Order::destroy($id);
     
        return redirect()->route('order.index')->with(['deleted' => 'Deleted successfully']);
    }
}
