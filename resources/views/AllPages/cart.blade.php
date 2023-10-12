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
      
                       
                      
                          <div class="container">
                           
                            @foreach(session('cart') as $id => $product)
                                      <div class="row mb-4 d-flex justify-content-between align-items-center">
                                          <div class="col-md-2 col-lg-2 col-xl-2">
                                              <img src="{{asset('images/'.$product['image1'])}}" class="img-fluid rounded-3">
                                          </div>
                                          <div class="col-md-3 col-lg-3 col-xl-3">
                                              <h5>{{$product['Name']}}</h5>
                                          </div>
                                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                            <div class="col-md-4 col-6">
                                                <div class="input-group" style="width: 170px;">
                                                   
                                                   <button class="btn btn-white border border-secondary px-3 decrement-button" 
        data-action="decrement" 
        data-mdb-ripple-color="dark" 
        >
    <i class="fas fa-minus" style="color: green;"></i>
</button>


<input type="text" name="quantity" id="actionInput"  class="form-control text-center border border-secondary" placeholder=" {{$product['quantity']}}" value=" {{$product['quantity']}}" aria-label="Example text with button addon" aria-describedby="button-addon1"  />
<button class="btn btn-white border border-secondary px-3 increment-button" 
        data-action="increment" 
        data-mdb-ripple-color="dark" 
      >
    <i class="fas fa-plus" style="color: green;"></i>
</button> 

                                                </div>
                                            </div>
                                        </div>
                                        
                                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                              <h6 class="mb-0">{{$product['price']}}</h6>
                                          </div>
                                      
                                          <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                            <a href="javascript:void(0);" class="text-muted delete-product" data-product-id="{{ $product['id'] }}">
                                                <i class="fas fa-times"></i>
                                            </a>
                                            
                                      
                                          </div>
                                      </div>
                                      <hr class="my-4">
                                
                              @endforeach
                         
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

        <div class="row mb-4 justify-content-center align-items-center h-100 container">

            

            <div class="mb-5 col-lg-6 ">
            
            </div>
        <div class=" card col-lg-6 " style="background-color: #d7ecd81a; border-radius: 20px; " >
            <div class="p-5">
              <h3 class=" mb-5  pt-1 ">Summary</h3>
              <hr class="my-4">

              <div class="d-flex justify-content-between mb-4">
                <h5 class="text-uppercase">items {{ count(session('cart')) }}</h5>
                <h5>JOD {{ number_format(array_reduce(session('cart'), function ($carry, $item) {
                  return $carry + $item['price'];
              }, 0), 2) }}</h5>
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
                 

                  @php
                  $cart = session('cart'); // Retrieve your cart data from the session
                  $cartTotal = array_reduce($cart, function ($carry, $item) {
                      return $carry + $item['price'];
                  }, 0);
                  
                  $appliedDiscount = null;
                  $discountCode = request()->input('discount');
                  // Get the discount code from the request
                  
                  if (!empty($discountCode)) {
                      if (request()->has('apply_discount')) {
                          // Check if the user has explicitly requested the discount
                          $discount = App\Models\Discount::where('Name', $discountCode)->first();
                          if ($discount) {
                              if ($appliedDiscount && $appliedDiscount->Name === $discountCode) {
                                  // The discount has already been applied
                                  $message = 'Oops, the discount has already been used!';
                              } else {
                                  $appliedDiscount = $discount;
                                  $cartTotal *= (1 - ($discount->Percent / 100));
                                  $message = 'Discount applied successfully!';
                              }
                          } else {
                              // Discount code not found
                              $message = 'Invalid discount code. Please try again.';
                          }
                      }
                  }
                  @endphp
                  
                  <div class="mb-5">
                      <div class="form-outline">
                          <h5 class="text-uppercase mb-3">Give code</h5>
                          <div class="mb-5">
                              <div class="form-outline">
                                  <form method="POST" action="{{ route('discountcoupon') }}">
                                      @csrf
                                      <input type="text" name="discount" id="form3Examplea2" class="form-control form-control-lg" />
                                      <button type="submit" name="apply_discount" id="applyDiscountButton" class="btn btn-primary mt-2">Apply Discount</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  
{{--                   
                  @if(isset($message))
                  <div class="alert alert-danger">
                      {{ $message }}
                  </div>
                  @endif --}}
                  
                  <hr class="my-2">
                  
                  <div class="d-flex justify-content-between mb-5">
                      <h5 class="text-uppercase">Total price</h5>
                      <h5>JOD {{ number_format($cartTotal, 2) }}</h5>
                  </div>
                  
                  <a href="checkout.html" class="btn btn-primary mx-auto py-3 px-4 mt-4" style="float: right;">Checkout</a>
                  </div>
                @endif  



          </div>
          </div>
      </section>


   
      <script>
       
    </script>
    








      <script src="sweetalert2.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const applyDiscountButton = document.getElementById('applyDiscountButton');

        applyDiscountButton.addEventListener('click', function () {
            Swal.fire({
                title: 'Apply Discount?',
                text: 'Do you want to apply the discount code?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Apply',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Assuming the form has the id "discountForm"
                    const form = document.getElementById('discountForm');
                    if (form) {
                        // Submit the form
                        form.submit();

                        // Display the "Wow, you get the discount!" message with a 3-second timer
                        Swal.fire({
                            title: 'Wow, you get the discount!',
                            icon: 'success',
                            timer: 3000 // Set the timer to 3 seconds (3000 milliseconds)
                        });
                    }
                }
            });
        });
    });
</script>

    

















{{-- 
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function () {
              $("#incrementButton, #decrementButton").click(function () {
                  var action = $(this).data("action");
                  $("#actionInput").val(action);
                  // Trigger the form submission
                  $(this).closest("form").submit();
              });
          });
      </script> --}}


@endsection




