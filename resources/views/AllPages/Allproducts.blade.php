@extends('layouts.Master')
@section('title', 'PRO')

    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Rubik:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('vendor-product/font-awesome/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor-product/animate.css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css-product/font-mytravel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor-product/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    

    <!-- CSS MyTravel Template -->
    <link rel="stylesheet" href="{{ asset('css-product/theme.css') }}">
@section('content')







    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 header mb-4 animated slideInDown "> All Products</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Our Product</a></li>
                  
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main">
            <div class="container pt-5 pt-xl-8" >
                <div class="row mb-5 mb-md-8 mt-xl-1 pb-md-1">
                    <div class="col-lg-4 col-xl-3 order-lg-1 width-md-50">
                        <div class="navbar-expand-lg navbar-expand-lg-collapse-block">
                            <button class="btn d-lg-none mb-5 p-0 collapsed" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="far fa-caret-square-down text-primary font-size-20 card-btn-arrow ml-0"></i>
                                <span class="text-primary ml-2">Sidebar</span>
                            </button>
                            <div id="sidebar" class="collapse navbar-collapse">
                                <div class="mb-6 w-100">
                                    <div class="pb-4 mb-2">
                                     
                                            <div class="sidebar border border-color-1 rounded-xs">
                                                <div class="sidebar border border-color-1 rounded-xs">
                                                    
                                                    <form method="get" action="{{ route('search') }}">
                                                        @csrf
                                                        {{-- <span class="d-block font-size-lg-15 font-size-18 font-weight-bold text-dark ms-1 mb-1">Search now:</span> --}}
                                                        <div class="search-input-container col-12 mt-4">
                                                            <input type="text" name="search" id="search" class="form-control text-center border border-color-1 rounded-xs  "
                                                                aria-label="Example text with button addon" value="{{ request('search') }}" placeholder="Search here" />
                                                            <i class="fas fa-search search-icon" style="font-size: 25px;"></i>
                                                        </div>
                                                    </form>
                                                    
                                                    


<form method="get" action="{{ route('search') }}">
    @csrf
    <span class="d-block font-size-lg-15 font-size-18 font-weight-bold text-dark ms-1 mb-1">Price Range (JOD):</span>

    <div class="form-row">
        <div class="col-12">
            <div class="combined-input" style="width: 98%;margin-left:3px;">
                <input type="number" name="min_price" id="min_price" placeholder="Min Price" class="form-control text-center border-color-1 rounded-xs search-input" aria-label="Minimum Price" value="{{ request('min_price') }}" />
                <input type="number" name="max_price" id="max_price" placeholder="Max Price" class="form-control text-center border-color-1 rounded-xs search-input" aria-label="Maximum Price" value="{{ request('max_price') }}" />
            </div>
        </div>
        <button type="submit" hidden>uu</button>
    </div>
</form>


<form>
    <span class="d-block font-size-lg-15 font-size-18 font-weight-bold text-dark ms-1 mb-1">Choose the brand:</span>
    <div style="width: 98%;margin-left:3px;">
<select name="min_price" class="form-control text-center border border-color-1 rounded-xs" aria-label="Minimum Price" style="background-color: white">
    <option value="">Select Minimum Price</option>
    <option >Shatha</option>
    <option>Woww</option>

    <!-- Add more options as needed -->
</select>
    </div>
</form>


<div class="card-collapse" id="cityCategoryHeadingOne">
    <span class="d-block font-size-lg-15 font-size-18 font-weight-bold text-dark ms-1 mb-1">All Categories:</span>
    @foreach ($categories as $category)
    <div class="form-group d-flex align-items-center font-size-1 text-lh-md  mb-3 ">

            <a href="{{ route('allproduct', ['Category_ID' => $category->id]) }}"><i class="bi bi-circle me-1 ms-2"></i></a>

      <span class="custom-control-label " for="brandamsterdam">{{$category->Name}}</span>     
       
    </div>
    @endforeach

</div>


                                                </div>
                                              
                                                
                                            </div>
   
                                      
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-xl-9 order-md-1 order-lg-2">
                        <!-- Shop-control-bar Title -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h3 class="font-size-21 font-weight-bold mb-0 text-lh-1">{{ $categoryProductCounts}} results found.</h3>
                     
                        </div>
                        <!-- End shop-control-bar Title -->

                        <!-- Slick Tab carousel -->
                        <div class="u-slick__tab">
                         

                            <!-- Tab Content -->
                            <div class="tab-content " id="pills-tabContent">
                            
                                <div class="tab-pane fade show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                                    <!-- Product Cards Feature with Ratings -->
                                    <div class="row">

                                        @foreach ($allProductsCollection as $product)
                                        <div class="col-md-6 col-xl-4 mb-3 mb-md-4 pb-1"  id="product-{{ $product->id }}" >
                                            <div class="card transition-3d-hover shadow-hover-2 h-100">
                                                <div class="position-relative">
                                                    <a href="{{ route('productdetail', ['id_product' => $product->id]) }}" style="background-color: #dbdbdb9e;">
                                                        <img class="card-img-top" src="{{ asset('images/' . $product->image1) }}">
                                                    </a>
                                                    {{-- <div class="position-absolute top-0 left-0 pt-3 pr-3">
                                                        <i class="me-1 fa fa-heart fa-lg" style="color: rgba(6, 128, 0, 0.952);"></i>
                                                    </div> --}}
                                                    
                                                    {{-- <div class="position-absolute bottom-0 left-0 right-0">
                                                        <div class="px-3 pb-2">
                                                            <a href="../yacht/yacht-single-v1.html">
                                                                <span class="text-white font-weight-bold font-size-17">{{ $product->Name }}</span>
                                                            </a>
                                                            <div class="text-white my-2">
                                                                <span class="mr-1 font-size-14">From</span>
                                                                <span class="font-weight-bold font-size-19">JOD {{ $product->Price }}</span>
                                                          
                                                            </div>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                <div class="card-body px-4 pt-3 pb-2 border-bottom">
                                                    <a href="../yacht/yacht-single-v1.html" class="d-block">
                                                        <div class="d-flex align-items-center font-size-18 font-weight-bold text-secondary" >
                                                           {{ $product->Name }}
                                                        </div>
                                                    </a>
                                                    <a href="../yacht/yacht-single-v1.html" class="d-block">
                                                        <div class="d-flex align-items-center font-size-14 text-gray-1 mt-1">
                                                          JOD {{ $product->Price }}
                                                        </div>
                                                    </a>
                                                    <div class="my-2">
                                                        <div class="d-inline-flex align-items-center font-size-14 text-lh-1 text-primary">
                                                            <div class=" mr-2"  style="color: rgba(6, 128, 0, 0.952); font-size:18px;">
                                                                <small class="fas fa-star" ></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                                <small class="fas fa-star"></small>
                                                            </div>
                                                            <span class="text-secondary font-size-14 mt-1 ">48 Reviews</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 py-3">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="media mb-2 text-gray-1 align-items-center">
                                                                  
                                                                 
                                                                    
                                                                    <div class="media-body font-size-1">
                                                                        <i class="fas fa-box" style="color: rgba(6, 128, 0, 0.952); font-size:17px;"></i>   {{ $product->Stockquantity }}
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                        <div class="col-6">
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="media mb-2 text-gray-1 align-items-center">
                                                                    {{-- <small class="mr-2">
                                                                        <i class="fas fa-gem " style="color: rgba(6, 128, 0, 0.952);font-size:18px;"></i>
                                                                    </small> --}}
                                                                    <div class="media-body font-size-1 ">
                                                                        <i class="fas fa-gem " style="color: rgba(6, 128, 0, 0.952);font-size:17px;"></i>            {{ $product->Brand }}
                                                                    </div>
                                                                </li>
                                                           
                                                            </ul>
                                                        </div>
                                                        
                                                

                                                    </div>
                                                </div>
                                                {{-- <ul class="product-links">
                                                    <li><a href="{{ route('productdetail', ['id' => $product->id]) }}" style="background-color: #dbdbdb9e;"><i class="fa fa-search" style="color: rgb(4, 91, 4);"></i></a></li>
                                                    <li><a href="cart.html" style="background-color: #dbdbdb9e;"><i class="fas fa-shopping-cart" style="color: rgb(4, 91, 4);"></i></a></li>
                                                    <li><a href="All-product.html" style="background-color: #dbdbdb9e;"><i class="fa fa-random" style="color: rgb(4, 91, 4);"></i></a></li>
                                                </ul> --}}
                                                <div class="w-100">
                                                    <div class="d-flex justify-content-between mx-auto ">
                                                       
                                                        <div class="w-100">
                                                            <a  class="btn btn-primary shadow-0 w-100 btn2 "> <i class="me-1 fa fa-shopping-basket"></i>Add to cart</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        @endforeach
                                        
                                      
                                    </div>
                               
                                   
                                    <!-- End Product Cards Feature with Ratings -->
                                </div>
                            </div>

                           
                            <!-- End Tab Content -->
                          
                        </div>
                        
                        <!-- Slick Tab carousel -->
                    </div>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->

        <div style="margin-left: 56%; margin-right: 35%; text-align: center;">
            {!! $allProductsCollection->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
        













       



@endsection


  <!-- JS Global Compulsory -->
  {{-- <script src="{{ asset('vendor-product/jquery/dist/jquery.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/jquery-migrate/dist/jquery-migrate.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/popper.js/dist/umd/popper.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/bootstrap/bootstrap.min.js') }}" ></script> --}}

  <!-- JS Implementing Plugins -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="{{ asset('vendor-product/hs-megamenu/src/hs.megamenu.js') }}" ></script>
  <script src="{{ asset('vendor-product/jquery-validation/dist/jquery.validate.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/flatpickr/dist/flatpickr.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/bootstrap-select/dist/js/bootstrap-select.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/slick-carousel/slick/slick.js') }}" ></script>
  <script src="{{ asset('vendor-product/gmaps/gmaps.min.js') }}" ></script>
  <script src="{{ asset('vendor-product/ion-rangeslider/js/ion.rangeSlider.min.js') }}" ></script>

  <script>
    //   $(window).on('load', function () {
    //       // initialization of HSMegaMenu component
    //       $('.js-mega-menu').HSMegaMenu({
    //           event: 'hover',
    //           pageContainer: $('.container'),
    //           breakpoint: 1199.98,
    //           hideTimeOut: 0
    //       });

          
    //   });



      $(document).on('ready', function () {
          // initialization of header
          $.HSCore.components.HSHeader.init($('#header'));

          // initialization of google map
          function initMap() {
              $.HSCore.components.HSGMap.init('.js-g-map');

              $('#search').on('input', function () {
    var query = $(this).val();
    if (query.length >= 3) {
        console.log("Document is ready!"); 
        $.ajax({
            url: "{{ route('search') }}",
            method: "GET",
            data: { search: query },
            success: function (data) {
                // Identify the specific product item you want to update
                // For example, if you have product ID 123, update it like this:
                $('#product-123').html(data);
            }
        });
    }
});
          }

          // initialization of unfold component
          $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

          // initialization of show animations
          $.HSCore.components.HSShowAnimation.init('.js-animation-link');

          // initialization of datepicker
          $.HSCore.components.HSRangeDatepicker.init('.js-range-datepicker');

          // initialization of forms
          $.HSCore.components.HSRangeSlider.init('.js-range-slider');

          // initialization of select
          $.HSCore.components.HSSelectPicker.init('.js-select');

          // initialization of quantity counter
          $.HSCore.components.HSQantityCounter.init('.js-quantity');

          // initialization of slick carousel
          $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

          // initialization of go to
          $.HSCore.components.HSGoTo.init('.js-go-to');
      });
  </script> 



  