@extends('layouts.Master')
@section('title', 'PRO')
@section('content')





    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 mb-4 animated slideInDown header">Cart page</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Cart</a></li>
                    
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section class="h-100 h-custom" >
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class=" card-registration card-registration-2" >
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="d-flex justify-content-between align-items-center mb-5">

                          <h1 class="fw-bold mb-0 ">Shopping Cart</h1>
                       
                       
                          @if(session('cart'))
                          <h6 class="mb-0 text-muted">{{ count(session('cart')) }}  items</h6>
                        </div>
                        <hr class="my-4">
         
             
         @else


         @php      $cartCount = ($cart !== null) ? count($cart) : 0;   @endphp
         <h6 class="mb-0 text-muted">{{ $cartCount}}  items</h6>
        </div>
        <hr class="my-4">
         @endif

                       
                      
                          <div class="container">
                            {{-- @if (session()->has('cart') && count(session('cart')) > 0) --}}
                     
                            @foreach($cart as $item)
                                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                            <img src="{{ asset('images/' . (isset($item->product) ? $item->product->image1 : $item['image1'])) }}" class="img-fluid rounded-3">
                                        </div>
                                        
                                          <div class="col-md-3 col-lg-3 col-xl-3">
                                              <h5>{{isset($item->product) ? $item->product->Name : $item['Name']}}</h5>
                                          </div>
                                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <div class="col-md-4 col-6">
                                                <div class="input-group" style="width: 170px;">
                                                    <form method="POST" action="{{ route('updatecart', isset($item->product) ? $item->product->id : $item['id']) }}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <button type="button" class="btn btn-outline-secondary minus-btn" style="border-right: none;"><i class="fa fa-minus" style="color:darkgreen;font-size:17px;"></i></button>
                                                            </div>
                                                        
                                                            <input type="text" name="quantity" id="actionInput" class="form-control text-center border border-secondary" value="{{ isset($item->product) ? $item->Quantity : $item['quantity'] }}" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                                        
                                                            <div class="input-group-append">
                                                                <button type="button" class="btn btn-outline-secondary plus-btn" style="border-left: none;"><i class="fa fa-plus" style="color:darkgreen;font-size:17px;"></i></button>
                                                            </div>
                                                        </div>
                                                        
                                                        
                                        
                                                        <button type="submit" class="btn btn-primary update-product" hidden>Update</button>
                                                    </form>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                            <h6 class="mb-0">
                                              JOD  {{ isset($item->product) ? $item->product->Price * $item->Quantity : $item['price'] * $item['quantity'] }}
                                            </h6>
                                            
                                          </div>
{{--                                       
                                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <form method="POST" action="{{ route('updatecart', isset($item->product) ? $item->product->id : $item['id']) }}">
                                                @csrf
                                                @method('PATCH')
                                         
                                         
                                        </div> --}}
                                        
                                        <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <form method="POST" action="{{ route('deletecart', isset($item->product) ? $item->product->id : $item['id']) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger delete-product">Delete</button>
                                            </form>
                                        </div>
                                        
                                      </div>
                                      <hr class="my-4">
                                    
                              @endforeach
                         {{-- @endif --}}
                
                          </div>
          
                 
    <div class="volunteer-form">
        @if (Session::has('error'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: 'Message',
                        text: "{{ Session::get('error') }}",
                        icon: 'warning',
                        showConfirmButton: true,
                        confirmButtonText: "OK",
                    });
                });
            </script>
        @endif
    </div>     
      
                   
      
                        <div class="pt-5">
                          <h6 class="mb-0"><a href="#!" class="text-body"><i
                                class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                        </div>
                      </div>
                    </div>
                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 


   
        <div class="volunteer-form">
            @if (Session::has('erorr'))
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            title: 'Message',
                            text: "{{ Session::get('erorr') }}",
                            icon: 'success',
                            showConfirmButton: true,
                            confirmButtonText: "OK",
                        });
                    });
                </script>
            @endif
        </div>
        
        @if (auth()->user())

        @php $shipment = 2 @endphp
       
   
    
        <div class="row mb-4 justify-content-center align-items-center h-100 container">
            <div class="mb-5 col-lg-6"></div>
            <div class="card col-lg-6" style="background-color: #d7ecd81a; border-radius: 20px;">
                <div class="p-5">
                    <h3 class="mb-5 pt-1">Summary</h3>
                    <hr class="my-2">
     
                
                @if(!$dis)
                       @php
                    $totalPrice = 0; // Initialize $totalPrice here if not already initialized
                @endphp
                
                @foreach($cart as $item)
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <!-- Your item rendering code here -->
                        @php
                            $itemPrice = isset($item->product) ? $item->product->Price * $item->Quantity : $item['price'] * $item['quantity'];
                            $totalPrice += $itemPrice + $shipment;
                        @endphp
                    </div>
                @endforeach
            @else
                @php
                    $totalPrice = 0; // This line resets $totalPrice, which is incorrect
                @endphp
            
                @foreach($cart as $item)
                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                        <!-- Your item rendering code here -->
                        @php
                            $itemPrice = isset($item->product) ? $item->product->Price * $item->Quantity : $item['price'] * $item['quantity'];
                            $totalPrice += $itemPrice + $shipment;
                        @endphp
                    </div>
                @endforeach
            
                @php
                    $discountAmount = ($dis / 100) * $totalPrice;
                    $totalPrice -= $discountAmount;
                @endphp
            @endif
            


    
                    <div class="d-flex justify-content-between mb-4">
                        @php      $cartCount = ($cart !== null) ? count($cart) : 0;   @endphp
                        <h5 class="text-uppercase">{{ $cartCount}}  items</h5>
                        <h5>JOD {{ $totalPrice }}</h5>
                    </div>
                    <h5 class="text-uppercase mb-3">Shipping</h5>
        
                    <div class="mb-4 pb-2">
                      <select class="select">
                        <option value="1">JOD 2</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        <option value="4">Four</option>
                      </select>
                    </div>
      
               <div class="mb-5">
                   <div class="form-outline">
                       <h5 class="text-uppercase mb-3">Give code</h5>
                       <div class="mb-5">
                           <div class="form-outline">
                               <form method="POST" action="{{ route('discountcoupon') }}">
                                   @csrf
                                   <input type="text" name="discount" id="form3Examplea2" class="form-control form-control-lg" />
                                   <button type="submit"  id="applyDiscountButton" class="btn btn-primary mt-2">Apply Discount</button>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
               <hr class="my-2">
                  
               <div class="d-flex justify-content-between mb-5">
                   <h5 class="text-uppercase">Total price</h5>
                   <h5>JOD {{$totalPrice }}</h5>
               </div> 
               <a href="{{ route('adresess_user', ['iduser' => auth()->user()->id]) }}" class="btn btn-primary mx-auto py-3 px-4 mt-4" style="float: right;">Checkout</a>
            </div>
                </div>
            </div>
        </div>
     

    
     
                 

                  
             
                  
      
                  
       
          
                 
   
                     
                 @else
                 <div class="row mb-4 justify-content-center align-items-center h-100 container">

            

                    <div class="mb-5 col-lg-6 ">
                    
                    </div>
                <div class=" card col-lg-6 " style="background-color: #d7ecd81a; border-radius: 20px; " >
                    <div class="p-5">
                      <h3 class=" mb-5  pt-1 ">Summary</h3>
                      <hr class="my-4">
        
                      <div class="d-flex justify-content-between mb-4">
                        @php
                        $cart = session('cart');
                        $cartCount = is_array($cart) ? count($cart) : 0;
                        $totalPrice = 0;
                        
                        if (is_array($cart)) {
                            foreach ($cart as $item) {
                                if (isset($item['price'])) {
                                    $totalPrice += $item['price'] * $item['quantity'];
                                }
                            }
                        }
                        
                        $appliedDiscount = null;
        
                    @endphp
                        
                        <h5 class="text-uppercase">items {{ $cartCount }}</h5>
                        <h5>JOD {{ number_format($totalPrice, 2) }}</h5>
                        
                        
                      </div>
        
                      <h5 class="text-uppercase mb-3">Shipping</h5>
        
                      <div class="mb-4 pb-2">
                        <select class="select">
                          <option value="1">JOD 2</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                        </select>
                      </div>
        
                   
                   
        
                      <div class="mb-5">
                        <div class="form-outline">
                         
        
                
                          
                          <hr class="my-2">
                          
                          <div class="d-flex justify-content-between mb-5">
                              <h5 class="text-uppercase">Total price</h5>
                              <h5>JOD {{ number_format($totalPrice, 2) }}</h5>
                          </div>
                          <a href="/login" class="btn btn-primary mx-auto py-3 px-4 mt-4" style="float: right;">Checkout</a>
                        </div>
                 @endif







                
          </div>
          </div>
      </section>


   

    


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>




<script>
    $(document).ready(function () {
        $('.plus-btn, .minus-btn').on('click', function (e) {
            e.preventDefault();

            var inputField = $(this).closest('.input-group').find('input[name="quantity"]');
            var currentQuantity = parseInt(inputField.val());

            if ($(this).hasClass('plus-btn')) {
                inputField.val(currentQuantity + 1);
            } else if ($(this).hasClass('minus-btn') && currentQuantity > 1) {
                inputField.val(currentQuantity - 1);
            }

            updateCart(inputField);
        });

   
    });
</script>

    


    


















@endsection




