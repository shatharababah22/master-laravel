@extends('layouts.Master')
@section('title', 'PRO')

@section('content')


<style>

    
.step-container {
        position: relative;
        text-align: center;
        transform: translateY(-43%);
      }
  
      .step-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #fff;
        border: 2px solid  #2c6a39;
        line-height: 30px;
        font-weight: bold;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
        cursor: pointer; /* Added cursor pointer */
      }
  
      .step-line {
        position: absolute;
        top: 16px;
        left: 50px;
        width: calc(100% - 100px);
        height: 2px;
        background-color:  #2c6a39;
    
        z-index: -1;
      }
      
      #multi-step-form{
          overflow-x: hidden;
      }

      .title-style{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 700;
        font-size: 20px;
        color: hsl(52, 0%, 98%);
        }
        .title-quote{
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-weight: 400;
        color: hsl(52, 0%, 98%);
        }


    

        .form-control:focus {
    color: #495057;
    background-color: #fff;
 
    outline: 0;
    box-shadow: none;

    }


    .input input{

      text-indent: 25px;
    }

    .card-text{

      font-size: 15px;
    margin-left: 6px;
    }

    .certificate-text{

      font-size: 12px;
    }

       
    .billing{
      font-size: 11px;
    }  

    .super-price{

          top: 0px;
    font-size: 22px;
    }

    .super-month{

          font-size: 11px;
    }


    .line{
      color: #bfbdbd;
    }

    .free-button{

          background: #1565c0;
    height: 52px;
    font-size: 15px;
    border-radius: 8px;
    }


    .payment-card-body{

    flex: 1 1 auto;
    padding: 24px 1rem !important;

    }




    @media (min-width: 1025px) {
      .h-custom {
      height: 100vh !important;
      }
      }
      
      .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
      }
      
      .card-registration .select-arrow {
      top: 13px;
      }
      
      .bg-grey {
      background-color: #eae8e8;
      }
      
      @media (min-width: 992px) {
      .card-registration-2 .bg-grey {
      border-top-right-radius: 16px;
      border-bottom-right-radius: 16px;
      }
      }
      
      @media (max-width: 991px) {
      .card-registration-2 .bg-grey {
      border-bottom-left-radius: 16px;
      border-bottom-right-radius: 16px;
      }
      }


    
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 mb-4 animated slideInDown header">Checkout Page</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Checkout</a></li>
                    
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->









     


      <div id="container" class="container mt-5">
      
     
   

        <form id="multi-step-form ">
          <div class="step step-3 container">  
              <div class="container py-2">
                <div class="row d-flex justify-content-center align-items-center">
                  <div class="col">
                    <div class="  shadow-3">
                      <div class="row g-0">
                    
                        <div class="col-md-11 mx-auto">  
                
                      
                              <section class="h-100 h-custom" >
                                <div class="container py-5 h-100">
                                  <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-12">
                                      <div class=" card-registration card-registration-2">
                                        <div class=" p-0">
                                          <div class="row g-0">
                                            <div class="col-lg-8">
                                              <div class="p-5">
                                                @php      $cartCount = ($cart !== null) ? count($cart) : 0;   @endphp
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                  <h1 class="fw-bold mb-0 text-black">Review your orders</h1>
                                                  <h6 class="mb-0 text-muted">{{ $cartCount}}  items</h6>
                                                </div>
                                                <hr class="my-4">
                                                @if (is_object($cart) && count($cart) > 0)
                                                @foreach($cart as $item)
                                                    <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                        <div class="col-md-2 col-lg-2 col-xl-2">
                                                            <img src="{{ asset('images/' .  $item->product->image1) }}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-xl-3 mt-2">
                                                            <h6>{{ $item->product->Name}}</h6>
                                                        </div>
                                                        <div class="col-md-3 col-lg-3 col-xl-2">
                                                            <span>{{$item->Quantity}}</span>
                                                        </div>
                                                        <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                            <h6 class="mb-0">{{$item->product->Price * $item->Quantity}}</h6>
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                @endforeach
                                            @else
                                                <p>No items in the cart.</p>
                                            @endif
                                            
                                                <div class="pt-5">
                                                  <h6 class="mb-0"><a href="#!" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Back to shop</a></h6>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-lg-4 bg-grey">
                                              <div class="p-5">
                                                <h3 class="fw-bold mb-5 mt-2 pt-1">Summary</h3>
                                                <hr class="my-4">
                              
                                                {{-- <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Order number</h6>
                                                  <h6>11529</h6>
                                                </div> --}}
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Order Time</h6>
                                                  <h6>{{ date('g:i A') }}</h6>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                    <h6 class="text-uppercase">Order Date</h6>
                                                    <h6>{{ date('m/d/Y') }}</h6>
                                                  </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Shipping Address</h6>
                                                  <h6>{{$lastAddressCity}}</h6>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Items number</h6>
                                                  <h6>{{ $cartCount}}</h6>
                                                </div>
                              
                                                <div class="d-flex justify-content-between align-items-center">
                                                  <h5 class="text-uppercase mb-3">Shipping</h5>
                                                  <div class="mb-2 pb-2">
                                                    <select class="select">
                                                      <option value="2">JOD 2</option>
            
                                                    </select>
                                                  </div>
                                                </div>
                                                
                                                
                              
                                              
                              
                                                <hr class="my-4">
                              
                                                @php $totalprice = 0 @endphp
                                                @php $shipment = 2 @endphp
                                                @if (is_object($cart) && count($cart) > 0)
                                                @foreach($cart as $item)
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <!-- Your item rendering code here -->
                                                    @php
                                                        $itemPrice = isset($item->product) ? $item->product->Price * $item->Quantity : $item['price'] * $item['quantity'];
                                                        $totalprice += $itemPrice+$shipment;
                                                   
                                                    @endphp
                                                </div>
                                              
                                            @endforeach
                                            @endif
                                                <div class="d-flex justify-content-between mb-5">
                                                  <h5 class="text-uppercase">Total price</h5>
                                                  <h5>JOD {{$totalprice }}</h5>
                                                </div>
                              
                                                <div class="d-flex justify-content-end mt-4">
                                                    <form method="POST" action="{{ route('confirm', ['order' => $order]) }}">
                                                        @csrf
                                                        <button type="button" class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block" onclick="showConfirmationDialog({{ $order->id }})">Place order<i class="fa fa-arrow-right ms-3"></i></button>
                                                    </form>
                                                </div>
                                                
                                                
                              
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </section>
                          
            
                          </div>
            



                        
                      </div>
                    </div>
                    </div>
                  </div>
                </div>


              </div>
      










        
      
          <!-- <div class="step step-3">
            
            <h3>Step 3</h3>
            
          </div> -->
        </form>
      </div> 
















      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

      <script>
        function showConfirmationDialog(orderId) {
            Swal.fire({
                title: 'Confirm Order',
                text: 'Do you want to confirm this order?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, confirm',
                cancelButtonText: 'Cancel',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the new page (the confirm route) with the order ID
                    window.location.href = '/confirm/' + orderId; // Assuming orderId is available in your context
                }
            });
        }
    </script>
    
    
    







    @endsection