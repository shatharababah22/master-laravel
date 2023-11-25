<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use App\Models\Cartitem;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\PaymentMethod;

class PayPalController extends Controller
{
    /**
     * create transaction.
     *
     * @return \Illuminate\Http\Response
     */
    // public function createTransaction()
    // {
    //     return view('AllPages.order');
    // }
    /**
     * process transaction.
     *
     * @return \Illuminate\Http\Response
     */
    // public function processTransaction(Request $request)
    // {
    //     $provider = new PayPalClient;
    //     $provider->setApiCredentials(config('paypal'));
    //     $paypalToken = $provider->getAccessToken();
    //     $response = $provider->createOrder([
    //         "intent" => "CAPTURE",
    //         "application_context" => [
    //             "return_url" => route('successTransaction'),
    //             "cancel_url" => route('cancelTransaction'),
    //         ],
    //         "purchase_units" => [
    //             0 => [
    //                 "amount" => [
    //                     "currency_code" => "USD",
    //                     "value" => "1000.00"
    //                 ]
    //             ]
    //         ]
    //     ]);
    //     if (isset($response['id']) && $response['id'] != null) {
    //         // redirect to approve href
    //         foreach ($response['links'] as $links) {
    //             if ($links['rel'] == 'approve') {
    //                 return redirect()->away($links['href']);
    //             }
    //         }
    //         return redirect()
    //             ->route('createTransaction')
    //             ->with('error', 'Something went wrong.');
    //     } else {
    //         return redirect()
    //             ->route('createTransaction')
    //             ->with('error', $response['message'] ?? 'Something went wrong.');
    //     }
    // }
    /**
     * success transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function successTransaction(Request $request)
    {

        $paymentMethod = PaymentMethod::create([
            'PaymentType' => 'Paypal',
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

    $user = auth()->user();

    // Retrieve the cart items for the user
    $cartItems = Cartitem::where('UserID', $user->id)->get();

    // Delete the cart items associated with the user
    $cartItems->each(function ($cartItem) {
        $cartItem->delete();
    });

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
        $provider->getAccessToken();
            // Retrieve the cart items for the user
            $user = auth()->user();

            $cartItems = Cartitem::where('UserID', $user->id)->get();

            // Delete the cart items associated with the user
            $cartItems->each(function ($cartItem) {
                $cartItem->delete();
            });
        $response = $provider->capturePaymentOrder($request['token']);
        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            $orderData1 = Order::select('orders.*', 'paymentmethods.PaymentType', 'addresses.city')
                ->join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
                ->join('addresses', 'orders.billingsId', '=', 'addresses.id')
                ->where('orders.id', $order->id)
                ->first();
        
            // Pass $orderData1 to the view if it exists
            return view('AllPages.popop', compact('orderData1'));
        } else {
            // If status is not 'COMPLETED', still retrieve $orderData for the view
            $orderData = Order::select('orders.*', 'paymentmethods.PaymentType', 'addresses.city')
                ->join('paymentmethods', 'orders.PaymentMethodID', '=', 'paymentmethods.id')
                ->join('addresses', 'orders.billingsId', '=', 'addresses.id')
                ->where('orders.id', $order->id)
                ->first();
        
            return view('AllPages.popop', compact('orderData'));
        }
        }    /**
     * cancel transaction.
     *
     * @return \Illuminate\Http\Response
     */
    public function cancelTransaction(Request $request)
    {
        return redirect()
            ->route('createTransaction')
            ->with('error', $response['message'] ?? 'You have canceled the transaction.');
    }
}


