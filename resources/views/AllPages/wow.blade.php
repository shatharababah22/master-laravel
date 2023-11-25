@extends('layouts.Master')

@section('title', 'PRO')

@section('content')
<style>
    .con {
        margin: 5% auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 20px;
    }

    .logo img {
        width: 80px;
        height: 50px;
    }

    .card {
        border: 1px solid #ccc;
        border-radius: 10px;
    }

    .invoice {
        padding: 20px;
    }

    h5 {
        color: #333;
    }

    .font-weight-bold {
        font-weight: bold;
        color: #555;
    }

    .payment {
        border-top: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        margin-top: 15px;
    }

    table {
        width: 100%;
    }

    .text-muted {
        color: #777;
    }

    .py-2 {
        padding: 10px 0;
    }

    .mb-0 {
        margin-bottom: 0;
    }
</style>

<div class="container con mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-left logo p-2 px-5">
                    <img src="{{ asset('images/3.PNG') }}" width="80" height="50" alt="Company Logo">
                </div>
                <div class="invoice p-5">
                    <h5>Your Order Confirmation</h5>
                    <span class="font-weight-bold d-block mt-4">Hello, {{ auth()->user()->name }}</span>
                    <span>Your order has been confirmed and will be shipped within the next two days.</span>
                    <div class="payment border-top mt-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Order Date</span>
                                            <span>{{ $orderData->OrderDate }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Total Amount</span>
                                            <span>{{ $orderData->TotalAmount }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Payment</span>
                                            <span>{{ $orderData->PaymentType }}</span> <!-- Added to display payment method type -->
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Shipping Address</span>
                                            <span>{{ $orderData->city }}</span> <!-- Added to display address name -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <p class="mr-4" style="margin-left: 50px">You will receive a shipping confirmation email when the item is successfully shipped.</p>
                <p class="font-weight-bold" style="margin-left: 50px">Thank you for shopping with us!</p>
                <a href="./about.html" class="btn btn-primary py-sm-3 px-sm-4 mt-4">Read More</a>
                <a href="./about.html" class="btn btn-primary py-sm-3 px-sm-4 mt-4">Read More</a>
            </div>
        </div>
    </div>
</div>
@endsection
