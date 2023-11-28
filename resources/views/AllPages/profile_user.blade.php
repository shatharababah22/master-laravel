@extends('layouts.Master')
@section('title', 'PRO')
@section('content')

<style>

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}




/* table */

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color:darkgreen;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #1c690c;
}


.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.warning {
    color: #856404;
    background-color: #fff3cd;
    border-color: #ffeeba;
}

.danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

    </style>


 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 mb-4 animated slideInDown header">Profile Page</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="main-body">
    

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/images/{{ Auth::user()->Image }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ Auth::user()->name }}</h4>
        
                      <p class="text-muted font-size-sm">{{ Auth::user()->email }}</p>
                      {{-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> --}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                    <ul class="list-group list-group-flush rounded-3" >
                        <li class="list-group-item d-flex align-items-center p-3">
                            <i class="fas fa-user fa-lg  me-3" style="color: green;"></i>
                           <a href="{{ route('profile.edit') }}"> <p class="mb-0"><b>Profile Information</b></p>  </a>
                          </li>
                      <li class="list-group-item d-flex  align-items-center p-3">
                        <a href="{{ route('cart') }}">    <i class="fas fa-bell fa-lg me-3" style="color: green;"></i></a>
                      <p class="mb-0">Your cart</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center  p-3">
                        <i class="fas fa-cogs fa-md me-3" style="color: green;"></i>

                        <p class="mb-0">Your order</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-heart fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">Wishlist</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-history fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">History</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-map-marker-alt fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">Track Your Order</p>
                      </li> 
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-undo fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">Returns and Refunds</p>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->Phone }}
                    </div>
                  </div>
                
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <select id="addressSelect" class="form-select form-select-md w-50" name="UserID">
                                  
                                        
                                          @if(isset($addresses))
                                              @foreach($addresses as $address)
                                                  <option value="{{ $address->id }}">{{ $address->city }}</option>
                                              @endforeach
                                          @endif
                                      </select>
                        
                          
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary" target="__blank" href="{{ route('profile.edit') }}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
             <h4>Recyclings Table</h4>
              <div class="row gutters-sm">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Types</th>
                            
                            <th>Quantity (In kileo)</th>
                            <th>Max Quantity (In kileo) <small>To get 30%</small></th>
                            <th>Max Quantity (In kileo) <small>To get 50%</small></th>
                            <th>Max Quantity (In kileo) <small>To get 80%</small></th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($Recyclings as $item)
                      @if(in_array($item->types, ['plastic', 'organic', 'paper', 'glass']))
                          @php
                              $maxQuantity30 = $kiloesForRecycling[$item->types][30] ?? 0;
                              $maxQuantity50 = $kiloesForRecycling[$item->types][50] ?? 0;
                              $maxQuantity80 = $kiloesForRecycling[$item->types][80] ?? 0;
                          @endphp
                          <tr class="active-row">
                              <td>{{$item->types}}</td>
                              <td>{{$item->Amount}}</td>
                              <td>
                                  @if($item->types == 'plastic')
                                      {{$maxQuantity30}}
                                  @elseif($item->types == 'organic')
                                      {{$maxQuantity30}}
                                  @elseif($item->types == 'paper')
                                      {{$maxQuantity30}}
                                  @elseif($item->types == 'glass')
                                      {{$maxQuantity30}}
                                  @endif
                              </td>
                              <td>
                                  @if($item->types == 'plastic')
                                      {{$maxQuantity50}}
                                  @elseif($item->types == 'organic')
                                      {{$maxQuantity50}}
                                  @elseif($item->types == 'paper')
                                      {{$maxQuantity50}}
                                  @elseif($item->types == 'glass')
                                      {{$maxQuantity50}}
                                  @endif
                              </td>
                              <td>
                                  @if($item->types == 'plastic')
                                      {{$maxQuantity80}}
                                  @elseif($item->types == 'organic')
                                      {{$maxQuantity80}}
                                  @elseif($item->types == 'paper')
                                      {{$maxQuantity80}}
                                  @elseif($item->types == 'glass')
                                      {{$maxQuantity80}}
                                  @endif
                              </td>
                          </tr>
                          @if($item->Amount >= $maxQuantity30 && $item->Amount < $maxQuantity50)
                          <div class="alert success">
                              Congratulations on reaching {{$item->types}} target for 30% discount! Discount: 30%
                          </div>
                      @elseif($item->Amount >= $maxQuantity50 && $item->Amount < $maxQuantity80)
                          <div class="alert warning">
                              Congratulations on reaching {{$item->types}} target for 50% discount! Discount: 50%
                          </div>
                      @elseif($item->Amount >= $maxQuantity80)
                          <div class="alert danger">
                              Congratulations on reaching {{$item->types}} target for 80% discount! Discount: 80%
                          </div>
                      @endif
              
                      @endif
                  @endforeach
                  
              
                  
                       
              
                    </tbody>
                </table>
              </div>
              <h4>Orders Table</h4>
              <div class="row gutters-sm">
                <table class="styled-table">
                    <thead>
                        <tr>
                          <th>Date</th>
                            <th># items</th>
                            <th>Total price</th>
                            <th>Payment method</th>
                        </tr>
                    </thead>
                    <tbody>

                    
   
                      @foreach($Orders ?? [] as $order)
                      {{-- {{ dd($order->orderItems) }} --}}
                      <tr class="active-row">
                          <td class="order-details" data-order-id="{{$order->id}}">{{$order->OrderDate}}</td>
                          <td>{{ $order->items_count}}</td>
                          <td>{{$order->TotalAmount}}</td>
                          <td>{{$order->PaymentType}}</td>
                      </tr>
                  
                      <tr class="order-items-row" id="order-items-{{$order->id}}" style="display: none;">
                          <td colspan="4">
                              <table class="styled-table" style="width: 100%">
                                  <thead>
                                      <tr>
                                    
                                          <th>Image</th>
                                          <th>Name</th>
                                          <th>Quantity</th>
                                          <th>Subtotal</th>
                                          
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach($order->orderItems ?? [] as $orderItem)
                          
                                    <tr>
                                      <td>
                                      
                                        <img src="{{ asset('images/' . $orderItem->product->image1) }}" alt="Product Image" width="150px" height="120px">
                                
                                      </td>
                                      <td>{{ $orderItem->product->Name }}</td>
                                      <td>{{ $orderItem->Quantity }}</td>
                                      <td>{{ $orderItem->Subtotal }}</td>
                                  </tr>
                                @endforeach
                                
                                  </tbody>
                              </table>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
                  
                  
                  
                </table>
            
                    </tbody>
                </table>
              </div>





            </div>
          </div>

        </div>
    </div>




    <script>
      document.addEventListener("DOMContentLoaded", function () {
          var orderDetails = document.querySelectorAll(".order-details");
  
          orderDetails.forEach(function (element) {
              element.addEventListener("click", function () {
                  var orderId = this.getAttribute("data-order-id");
                  var orderItemsRow = document.getElementById("order-items-" + orderId);
  
                  // Toggle the visibility of the order items row
                  if (orderItemsRow.style.display === "none") {
                      orderItemsRow.style.display = "table-row";
                  } else {
                      orderItemsRow.style.display = "none";
                  }
              });
          });
      });
  </script>
  


@endsection