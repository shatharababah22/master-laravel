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
                          <h6 class="mb-0 text-muted">3 items</h6>
                        </div>
                        <hr class="my-4">
      
                        <div class="row mb-4 d-flex justify-content-between align-items-center">
                          <div class="col-md-2 col-lg-2 col-xl-2">
                            <img
                              src="./images/c3.PNG"
                              class="img-fluid rounded-3" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                     
                            <h5 >Oni Mask Signet Ring</h5>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="col-md-4 col-6 ">
                              
                                <div class="input-group " style="width: 170px;">
                                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                    <i class="fas fa-minus" style="color: green;"></i>
                                  </button>
                                  <input type="text" class="form-control text-center border border-secondary" placeholder="2" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus" style="color: green;"></i>
                                  </button>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">JOD 20.15</h6>
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
                            <h5>Stained glass earrings Emerald</h5>
                           
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="col-md-4 col-6 ">
                              
                                <div class="input-group " style="width: 170px;">
                                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                    <i class="fas fa-minus" style="color: green;"></i>
                                  </button>
                                  <input type="text" class="form-control text-center border border-secondary" placeholder="2" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus" style="color: green;"></i>
                                  </button>
                                </div>
                              </div>
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
                              src="./images/c1.PNG"
                              class="img-fluid rounded-3" alt="Cotton T-shirt">
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-3">
                           
                            <h5 class=" mb-0">Recycled plastic earrings</h5>
                          </div>
                          <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                            <div class="col-md-4 col-6 ">
                              
                                <div class="input-group " style="width: 170px;">
                                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                    <i class="fas fa-minus" style="color: green;"></i>
                                  </button>
                                  <input type="text" class="form-control text-center border border-secondary" placeholder="2" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                  <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus" style="color: green;"></i>
                                  </button>
                                </div>
                              </div>
                          </div>
                          <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                            <h6 class="mb-0">JOD 15.75</h6>
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
                <h5 class="text-uppercase">items 3</h5>
                <h5>JOD 43.65</h5>
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

           
              <h5 class="text-uppercase mb-3">Give code</h5>

              <div class="mb-5">
                <div class="form-outline">
                  <input type="text" id="form3Examplea2" class="form-control form-control-lg" />
                  
                </div>
              </div>

              <hr class="my-4">

              <div class="d-flex justify-content-between mb-5">
                <h5 class="text-uppercase">Total price</h5>
                <h5>JOD 47.65</h5>
              </div>


              
              <a href="checkout.html" class="btn btn-primary mx-auto py-3 px-4 mt-4" style="float: right;">Checkout</a>
            </div>
          </div>
          </div>
      </section>


   
































@endsection