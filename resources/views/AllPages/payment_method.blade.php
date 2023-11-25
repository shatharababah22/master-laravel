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
/* SWAl */




    
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 mb-4 animated slideInDown header">Payment Method Page</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Payment Method</a></li>
                    
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->



    <div id="container" class="container">
        <h1 style="text-align: center">Payment Method</h1>
        {{-- <div class="progress px-1" style="height: 3px;">
          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="step-container  d-flex justify-content-between ">
          <div class="step-circle" onclick="displayStep(1)">1</div>
          <div class="step-circle" onclick="displayStep(2)">2</div>
          <div class="step-circle" onclick="displayStep(3)">3</div>
        </div> --}}
   

        <div id="multi-step-form ">
          <div class="step step-1 container">
            <!-- Step 1 form fields here -->
            <!-- <div class="container text-center">
                <h3 class="mb-2">Billing address</h3>
              </div> -->
              
              <div class="container py-4">
                <div class="row d-flex justify-content-center align-items-center">
                  <div class="col">
                    <div class="  shadow-3">
                      <div class="row g-0">
                    
                        <div class="col-xl-6">
                          <div class="card-body p-md-5 text-black">

      
    <div class="volunteer-form">
        @if (Session::has('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: 'Message',
                        text: "{{ Session::get('success') }}",
                        icon: 'success',
                        showConfirmButton: true,
                        confirmButtonText: "OK",
                    });
                });
            </script>
        @endif
    </div>
                         
                           
                          
  <form id="paymentForm" >
       
    <div class="modal-body">


      <div class="row mb-4">
       
   
    </div>
      <div class="col-md-12 mb-" style="margin-top:20%">
        <span class="me-2" style="display: inline-block; font-weight: bold; font-style: italic; font-family: 'Arial', sans-serif;">Payment method</span>                                          <div class="icons" style="display: inline-block;">
          
              <label><a class="btn btn-primary" style="width: 150px" href="{{ route('Paymentmethod') }}">
                  <input type="radio" name="PaymentType" value="Cash" onclick="updateSelectedPaymentType(this.value)">
                  <img src="{{ asset('images/payment-method.png') }}" width="40">Cash</a>
              </label>
           
             
              <label><a class="btn btn-primary"  style="width: 150px" href="{{ route('Paymentmethod_paypal') }}">
                  <input type="radio" name="PaymentType" value="Paypal"   onclick="updateSelectedPaymentType(this.value)">
                  <img src="{{ asset('images/pay.png') }}" width="40">Paypal
              </label></a>
          </div>
        </br>
      
      </div>
                                     </div>
    {{-- <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div> --}}
  </form>    
                           
                              
                     
                          
                          </div>
                        </div>
                        <div class="col-xl-6 d-xl-block bg-image">
                            <img src="https://i.pinimg.com/originals/f8/c4/22/f8c422a0a0e6793b3f9113d419c5143a.gif"  alt="Sample photo"
                              class="img-fluid" />
                            
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      










        
      
     
        </div>
      </div>












    </div>




      












           <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>

  
        

@endsection