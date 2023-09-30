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

<br>

    <div id="container" class="container mt-5">
        <div class="progress px-1" style="height: 3px;">
          <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="step-container  d-flex justify-content-between ">
          <div class="step-circle" onclick="displayStep(1)">1</div>
          <div class="step-circle" onclick="displayStep(2)">2</div>
          <div class="step-circle" onclick="displayStep(3)">3</div>
        </div>
   

        <form id="multi-step-form ">
          <div class="step step-1 container">
            <!-- Step 1 form fields here -->
            <!-- <div class="container text-center">
                <h3 class="mb-2">Billing address</h3>
              </div> -->
              
              <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                  <div class="col">
                    <div class="  shadow-3">
                      <div class="row g-0">
                    
                        <div class="col-xl-6">
                          <div class="card-body p-md-5 text-black">
                            <h3 class="mb-4 text-uppercase">Delivery Info</h3>
              
                            <div class="row">
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                 
                                  <input type="text" id="form3Example1m" class="form-control form-control-lg" placeholder="First name"/>
                                 
                                </div>
                              </div>
                              <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                  <input type="text" id="form3Example1n" class="form-control form-control-lg" placeholder="Last name" />
                         
                                </div>
                              </div>
                            </div>
              
              
              
              
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                  <div class="form-outline">
                                   
                                    <input type="text" id="form3Example1m" class="form-control form-control-lg" placeholder="Postal Code"/>
                                   
                                  </div>
                                </div>
                                <div class="col-md-6  mb-4">
                                  <div class="form-outline">
                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                        <option >City</option>
                                        <option value="1">Amman</option>
                                        <option value="2">Zarqa</option>
                                        <option value="3">Tafilah</option>
                                      </select>
                           
                                  </div>
                                </div>
                              </div>
                              
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example8" class="form-control form-control-lg" placeholder="Address" />
                   
                              </div>

                              <div class="form-outline mb-4">
                                <input type="text" id="form3Example8" class="form-control form-control-lg" placeholder="Email" />
                   
                              </div>

                              <div class="form-outline mb-4">
                              <input type="tel" id="phone" class="form-control form-control-lg" data-mdb-input-mask="+48 999-999-999" placeholder="Phone number" />
                             
                               </div>
              
                            <div class="d-flex justify-content-end ">
                                <a href="" class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block">Next<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
              
                          </div>
                        </div>
                        <div class="col-xl-6 d-xl-block bg-image">
                            <img src="./images/d1.jpg" alt="Sample photo"
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
        </form>
      </div>









      <div id="container" class="container mt-5">
      
     
   

        <form id="multi-step-form ">
          <div class="step step-2 container">
            <!-- Step 1 form fields here -->
            <!-- <div class="container text-center">
                <h3 class="mb-2">Billing address</h3>
              </div> -->
              
              <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                  <div class="col">
                    <div class="  shadow-3">
                      <div class="row g-0">
                    
                        <div class="col-md-6">  
                
                              <h3 class="mb-4 text-uppercase">Payment details</h3>
                            <div class="card border-0">
            
                              <div class="accordion" id="accordionExample">
                                
                                <div class="">
                                  <div class="card-header p-0" id="headingTwo">
                                    <h2 class="mb-0">
                                      <button class="btn  btn-block text-left collapsed p-3 rounded-0 border-bottom-custom" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="d-flex align-items-center justify-content-between">
            
                                          <span class="me-2">Paypal </span>
                                          <img src="./images/paypal (1).png"  width="30">
                                          
                                        </div>
                                      </button>
                                    </h2>
                                  </div>
                                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                      <input type="text" class="form-control" placeholder="Paypal email">
                                    </div>
                                  </div>
                                </div>
            
                                <div >
                                  <div class="card-header p-0">
                                    <h2 class="mb-0">
                                      <button class="btn  btn-block text-left p-3 rounded-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="d-flex align-items-center justify-content-between">
            
                                          <span class="me-2">Payment method  </span>
                                          <div class="icons">
                                            <img src="./images/card.png" width="30">
                                            <img src="./images/payment-method.png" width="30">
                                            <img src="images/visa.png" width="30">
                                            <img src="images/paypal (1).png" width="30">
                                    
                                          </div>
                                          
                                        </div>
                                      </button>
                                    </h2>
                                  </div>
            
                                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body payment-card-body">
                                      
                                      <span class="font-weight-normal card-text">Card Number</span>
                                      <div class="input">
            
                                      
                                        <input type="text" class="form-control" placeholder="0000 0000 0000 0000">
                                        
                                      </div> 
            
                                      <div class="row mt-3 mb-3">
            
                                        <div class="col-md-6">
            
                                          <span class="font-weight-normal card-text">Expiry Date</span>
                                          <div class="input">
            
                     
                                            <input type="text" class="form-control" placeholder="MM/YY">
                                            
                                          </div> 
                                          
                                        </div>
            
            
                                        <div class="col-md-6">
            
                                          <span class="font-weight-normal card-text">CVC/CVV</span>
                                          <div class="input">
            
                                   
                                            <input type="text" class="form-control" placeholder="000">
                                            
                                          </div> 
                                          
                                        </div>
                                        
            
                                      </div>
            
                                      <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your transaction is secured with ssl certificate</span>
                                     
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                              
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <a href="" class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block">Next<i class="fa fa-arrow-right ms-3"></i></a>
                            </div>
            
                          </div>
            



                        <div class="col-xl-6 d-xl-block bg-image " >
                            <img src="./images/ppp.png" alt="Sample photo"
                              class="img-fluid " />
                            
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
                                                <div class="d-flex justify-content-between align-items-center mb-5">
                                                  <h1 class="fw-bold mb-0 text-black">Review your orders</h1>
                                                  <h6 class="mb-0 text-muted">3 items</h6>
                                                </div>
                                                <hr class="my-4">
                              
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                  <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img
                                                      src="./images/c1.PNG"
                                                      class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                  </div>
                                                  <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">Recycled plastic earrings</h6>
                                               
                                                  </div>
                                                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                                                        <span >2</span>  
                                                  </div>
                                                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">JOD 15.75</h6>
                                                  </div>
                                                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                  </div>
                                                </div>
                              
                                                <hr class="my-4">
                              
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                  <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img
                                                      src="./images/c2.PNG"
                                                      class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                  </div>
                                                  <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">Stained glass earrings Emerald</h6>
                                                   
                                                  </div>
                                                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                                                    <span >1</span>  
                                              </div>
                                                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">JOD 7.75</h6>
                                                  </div>
                                                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                  </div>
                                                </div>
                              
                                                <hr class="my-4">
                              
                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                  <div class="col-md-2 col-lg-2 col-xl-2">
                                                    <img
                                                      src="./images/c3.PNG"
                                                      class="img-fluid rounded-3" alt="Cotton T-shirt">
                                                  </div>
                                                  <div class="col-md-3 col-lg-3 col-xl-3">
                                                    <h6 class="text-muted">Oni Mask Signet Ring</h6>
                                                    
                                                  </div>
                                                  <div class="col-md-3 col-lg-3 col-xl-2 d-flex justify-content-center">
                                                    <span >3</span>  
                                              </div>
                                                  <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                    <h6 class="mb-0">JOD 20.15</h6>
                                                  </div>
                                                  <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                    <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
                                                  </div>
                                                </div>
                              
                                                <hr class="my-4">
                              
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
                              
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Order number</h6>
                                                  <h6>11529</h6>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Order Date</h6>
                                                  <h6>14-12-2022</h6>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Shipping Address</h6>
                                                  <h6>Irbid-Jordan</h6>
                                                </div>
                                                <div class="d-flex justify-content-between mb-4">
                                                  <h6 class="text-uppercase">Items number</h6>
                                                  <h6>3</h6>
                                                </div>
                              
                                                <div class="d-flex justify-content-between align-items-center">
                                                  <h5 class="text-uppercase mb-3">Shipping</h5>
                                                  <div class="mb-2 pb-2">
                                                    <select class="select">
                                                      <option value="1">JOD 2</option>
                                                      <option value="2">Two</option>
                                                      <option value="3">Three</option>
                                                      <option value="4">Four</option>
                                                    </select>
                                                  </div>
                                                </div>
                                                
                                                
                              
                                              
                              
                                                <hr class="my-4">
                              
                                                <div class="d-flex justify-content-between mb-5">
                                                  <h5 class="text-uppercase">Total price</h5>
                                                  <h5>JOD 47.65</h5>
                                                </div>
                              
                                                <div class="d-flex justify-content-end mt-4">
                                                  <a href="" class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block">Place order<i class="fa fa-arrow-right ms-3"></i></a>
                                              </div
                              
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




    </div>




      












    <script>



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
          
































@endsection