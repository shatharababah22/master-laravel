@extends('layouts.Master')

@section('title', 'PRO')

@section('content')
<style>
    .con {
        margin: 3% auto;
        background-color: #9e0e0edf; /* Background color above the image */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        padding: 20px;
        height: 500px;
        width: 70%;
        background-image: url("https://i.pinimg.com/originals/5b/c0/83/5bc0833cd91dac56d5677bf89e383849.gif");
        background-repeat: no-repeat;
        background-size: cover; /* Use cover to make the image cover the entire background */
    }
    
    
    
        .logo img {
            width: 80px;
            height: 50px;
        }
    
        .card {
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #ffffffe7;
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
@if(isset($orderData1))
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
                                            <span>{{ $orderData1->OrderDate }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Total Amount</span>
                                            <span>{{ $orderData1->TotalAmount }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Payment</span>
                                            <span>{{ $orderData1->PaymentType }}</span> <!-- Added to display payment method type -->
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Shipping Address</span>
                                            <span>{{ $orderData1->city }}</span> <!-- Added to display address name -->
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <a href="./about.html" class="text-decoration-none">
                        <p class="font-weight-bold mb-0" style="margin-left: 50px">Thank you for shopping with us!</p>
                    </a>
                
                    <div class="d-flex me-4">
                        <a href="{{ route('home') }}" class="btn btn-primary py-sm-3 px-sm-4 me-2">Home</a>
                        <a href="{{ route('profile.general') }}" class="btn btn-primary py-sm-3 px-sm-4">Your orders</a>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</div>
@else
    <!-- Handle the case if $orderData1 is not set -->
    <p>No order data found.</p>
@endif
@endsection
