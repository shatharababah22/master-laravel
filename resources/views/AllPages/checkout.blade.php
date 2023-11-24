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



    <div id="container" class="container">
      <h1 style="text-align: center">Address</h1>
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
                            <form id="deliveryForm" method="POST" action="{{ route('checkout_address') }}">
                              @csrf
                              <div class="row mb-2">
                                  <h3 class="mb-4 text-uppercase col-md-6">Delivery Info</h3>
                                  <div class="form-outline col-md-6">
                                      <select id="addressSelect" class="form-select form-select-lg" name="UserID">
                                          <option value="">Select an address</option>
                                          @if(isset($addresses))
                                              @foreach($addresses as $address)
                                                  <option value="{{ $address->id }}" data-city="{{ $address->city }}" data-street="{{ $address->street }}" data-address="{{ $address->address1 }}" data-email="{{ $address->email }}" data-mobile="{{ $address->mobile }}">{{ $address->city }}</option>
                                              @endforeach
                                          @endif
                                      </select>
                                  </div>
                              </div>
                          
                              <div class="row">
                                  <div class="col-md-6 mb-4">
                                      <div class="form-outline">
                                          <input type="text" id="city" class="form-control form-control-lg" name="city" placeholder="City"/>
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-4">
                                      <div class="form-outline">
                                          <input type="text" id="street" class="form-control form-control-lg" name="street" placeholder="Street"/>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="form-outline mb-4">
                                  <input type="text" id="address1" class="form-control form-control-lg" name="address1" placeholder="Address" />
                              </div>
                              
                              <div class="form-outline mb-4">
                                  <input type="text" id="email" class="form-control form-control-lg" name="email" placeholder="Email" />
                              </div>
                              
                              <div class="form-outline mb-4">
                                  <input type="tel" id="phone" class="form-control form-control-lg" name="mobile" placeholder="Phone number" />
                              </div>
                              <div class="d-flex justify-content-end">
                                <button type="submit" id="showPaymentModalBtn" class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block">Next <i class="fa fa-arrow-right ms-3"></i></button>
                            </div>

                            </form>
                            <div class="modal" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <form id="paymentForm" method="POST" action="{{ route('Paymentmethod') }}">
                                    <div class="modal-header">
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      @csrf
                                      <div class="col-md-12 mb-4">
                                        <span class="me-2" style="display: inline-block; font-weight: bold; font-style: italic; font-family: 'Arial', sans-serif;">Payment method</span>                                          <div class="icons" style="display: inline-block;">
                                          
                                              <label><a class="btn btn-primary" style="width: 150px">
                                                  <input type="radio" name="PaymentType" value="Cash" onclick="updateSelectedPaymentType(this.value)">
                                                  <img src="{{ asset('images/payment-method.png') }}" width="40"></a>
                                              </label>
                                           
                                             
                                              <label><a class="btn btn-primary"  style="width: 150px">
                                                  <input type="radio" name="PaymentType" value="Paypal" onclick="updateSelectedPaymentType(this.value)">
                                                  <img src="{{ asset('images/pay.png') }}" width="40">
                                              </label></a>
                                          </div>
                                        </br>
                                          <span id="selectedPaymentMethod" class="mt-2">You selected: <span id="selectedPaymentType"></span></span>
                                          <input type="hidden" name="selectedPaymentType" id="hiddenSelectedPaymentType">
                                      </div>
                                                                     </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          
                     
                           
                              
                     
                          
                          </div>
                        </div>
                        <div class="col-xl-6 d-xl-block bg-image">
                            <img src="{{ asset('./images/d1.jpg') }}"  alt="Sample photo"
                              class="img-fluid" />
                            
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      










        
      
          <!-- <div class="step step-3">
            
            <h3>Step 3</h3>
            
          </div> -->
        </div>
      </div>












    </div>




      












    {{-- <script>



        var currentStep = 1;
        var updateProgressBar;
        
          function displayStep(stepNumber) {
            if (stepNumber >= 1 && stepNumber <= 3) {
              $(".step-" + currentStep).hide();
              $(".step-" + stepNumber).show();
              currentStep = stepNumber;
              updateProgressBar();
            }
          }
        
          $(document).ready(function() {
            $('#multi-step-form').find('.step').slice(1).hide();
          
            $(".next-step").click(function() {
              if (currentStep < 3) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                currentStep++;
                setTimeout(function() {
                  $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                  $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                  updateProgressBar();
                }, 500);
              }
            });
        
            $(".prev-step").click(function() {
              if (currentStep > 1) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
                currentStep--;
                setTimeout(function() {
                  $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                  $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
                  updateProgressBar();
                }, 500);
              }
            });
        
            updateProgressBar = function() {
              var progressPercentage = ((currentStep - 1) / 2) * 100;
              $(".progress-bar").css("width", progressPercentage + "%");
            }
          });
              </script>
           --}}
           <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
           {{-- <script src="https://unpkg.com/sweetalert@2"></script> --}}
           <script>
            document.addEventListener('DOMContentLoaded', function () {
                document.getElementById('addressSelect').addEventListener('change', function () {
                    const selectedOption = this.options[this.selectedIndex];
                    document.getElementById('city').value = selectedOption.dataset.city;
                    document.getElementById('street').value = selectedOption.dataset.street;
                    document.getElementById('address1').value = selectedOption.dataset.address;
                    document.getElementById('email').value = selectedOption.dataset.email;
                    document.getElementById('phone').value = selectedOption.dataset.mobile;
                });

                //     });
// });

const deliveryForm = document.getElementById('deliveryForm');
    const paymentModal = new bootstrap.Modal(document.getElementById('paymentModal'));

    // Handle the submission of the first form
    deliveryForm.addEventListener('submit', function (event) {
      event.preventDefault(); // Prevent the default form submission

      // Perform any form validation here if needed

      // Show the modal after the first form is submitted
      paymentModal.show();
    });

    // Optional: You might want to handle the hiding of the modal after the second form submission
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener('submit', function () {
      // Perform any additional actions after the second form is submitted

      // Hide the modal
      paymentModal.hide();
    });
    
            });
     
                              function updateSelectedPaymentType(value) {
                                  document.getElementById('selectedPaymentType').innerText = value;
                                  document.getElementById('hiddenSelectedPaymentType').value = value;
                              }
                      
//             const paymentRadios = document.querySelectorAll('input[name="PaymentType"]');
//     const selectedPaymentType = document.getElementById('selectedPaymentType');
//     const selectedPaymentMethod = document.getElementById('selectedPaymentMethod');

//     paymentRadios.forEach((radio) => {
//     radio.addEventListener('change', function () {
//         if (radio.checked) {
//             const selectedValue = radio.value;
//             selectedPaymentType.textContent = selectedValue;
//             selectedPaymentMethod.style.display = 'block';

//             // Show SweetAlert confirmation
//             Swal.fire({
//                 title: 'Are you sure?',
//                 text: `You have selected ${selectedValue}. Do you want to proceed?`,
//                 icon: 'warning',
//                 customClass: {
//                     icon: 'custom-warning-icon' // Apply the custom icon class
//                 },
//                 showCancelButton: true,
//                 confirmButtonColor: '#6BA60E',
//                 cancelButtonColor: '#d33',
//                 confirmButtonText: 'Yes, proceed!'
//             }).then((result) => {
//                 if (result.isConfirmed) {
//                     Swal.fire(
//                         'Confirmed!',
//                         'You can now proceed with your payment.',
//                         'success'
//                     )
//                 } else {
                
//                     radio.checked = false;
//                     selectedPaymentMethod.style.display = 'none';
//                 }
//             });
//         }


</script>
        

@endsection