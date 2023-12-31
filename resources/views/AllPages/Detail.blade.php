@extends('layouts.Master')
@section('title', 'PRO')

@section('content')







    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3  mb-4 animated slideInDown header">Product Details</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                  
                    <li class="breadcrumb-item active" aria-current="page">Product details</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->





      <!-- content -->
      <section class="py-5">
        <div class="container">
          @foreach ($products as  $product)
          @if (is_object($product))
          <div class="row gx-5">
     
            <aside class="col-lg-6">
              <div class="border rounded-4 mb-3 d-flex justify-content-center">
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <a data-fslightbox="mygallery" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                          <img style="width: 500px; height: 450px; margin: auto;" class="rounded-4 fit" src="{{ asset('images/' . $product->image1) }}" />
                      </a>
                  </div>
                  <div class="carousel-item">
                      <a data-fslightbox="mygallery" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
                          <img style="width: 500px; height: 450px;" class="rounded-2" src="{{ asset('images/' . $product->image2) }}"/>
                      </a>
                  </div>
                      <!-- Add more carousel items for other images -->
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                  </button>
              </div>
              
       

         
           
              </div>
              <!-- thumbs-wrap.// -->
              <!-- gallery-wrap .end// -->
            </aside>
            
            <main class="col-lg-6 mt-4">
              <div class="ps-lg-3">
                <h4 class="title header">
                  {{ $product->Name}}
                
                </h4>
                <div class="d-flex flex-row my-3">
                  <div class="mb-1 me-3" style="color: green; font-size: 17px;">
                    @php
                    $totalRating = 0;
                    $totalReviews = count($reviews);
                    
                    // Calculate the total rating
                    foreach($reviews as $review) {
                        $totalRating += $review->Rating; // Replace 'Rating' with the correct property name
                    }
                    
                    // Calculate the average rating
                    $averageRating = ($totalReviews > 0) ? round($totalRating / $totalReviews, 1) : 0;
                    $fullStars = floor($averageRating);
                    $halfStar = ceil($averageRating) > $fullStars;
                    $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
                    @endphp
                    
                    @for ($i = 0; $i < $fullStars; $i++)
                        <i class="fa fa-star"></i>
                    @endfor
                    
                    @if ($halfStar)
                        <i class="fas fa-star-half-alt"></i>
                        @php $emptyStars--; @endphp
                    @endif
                    
                    @for ($i = 0; $i < $emptyStars; $i++)
                        <i class="far fa-star"></i>
                    @endfor
                    
                    <span class="ms-1">{{ $averageRating }}</span>
                </div>
                
                
              
              
                              
                  <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{ $product->Stockquantity}}</span>
                  <span class="text-success ms-2">In stock</span>
                </div>
      
                <div class="mb-3">
                  {{-- <span class="h5"><span class="del">{{ $product->Price}}</span> --}}
                  <span class="text-muted h5">JOD {{ $product->Price}}</span>
                </div>
      
                <p>
                  {{ $product->description}}     
                           </p>
      
                <div class="row">
                  <dt class="col-3"  style="color: green;">MADE FROM:</dt>
                  <dd class="col-9">{{ $product->MADEFROM}}</dd>
      
                  {{-- <dt class="col-3"  style="color: green;">NOTES</dt>
                  <dd class="col-9"> {{ $product->NOTES}}	</dd> --}}
      
                  <dt class="col-3"  style="color: green;">ITEM ID</dt>
                  <dd class="col-9">{{ $product->ItemId}}</dd>
      
                  {{-- <dt class="col-3"  style="color: green;">Brand</dt>
                  <dd class="col-9">{{ $product->Brand}}</dd> --}}
                </div>
      
                <hr />
      
                <div class="row ">
                  <div class="col-md-4 col-6 ">
                    {{-- <label class="mb-2 ">Length</label> --}}
                    {{-- <select class="form-select border border-secondary" style="height: 35px;">
                      <option>200cm</option>
                      <option>150m</option>
                      <option>0.5m</option>
                    </select> --}}
                  </div>
                  <!-- col.// -->
                  <form method="POST" action="{{ route('addcart', ['id' => $product->id]) }}">
                    @csrf
               
                        <label class="mb-2 d-block">Quantity</label>
                        <div class="input-group mb-2" style="width: 170px;">
                          
                          <input type="number" class="form-control text-center border border-secondary" min="1" id="quantity" name="quantity" placeholder="1" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                          
                        </div>
                  
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                    <a href="checkout.html" class="btn btn-warning shadow-0"> Buy now </a>
                {{-- <a href="{{ route('addcart', ['id_cart' => $product->id]) }}" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a> --}}
                <a href="#" class="btn btn-light  icon-hover px-3"><i class="me-1 fa fa-heart fa-lg " style="color: green;"></i> Save </a>
                </form>
                
                </div>
                
              </div>
            </main>
          </div>
          @else
          <p>No product data available.</p>
      @endif
          @endforeach
        </div>
      </section>
      <!-- content -->
      
      

    
  
    <!-- Main Body -->

    <section class="mt-2 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-md-6 col-12 pb-4">
                    <h1>Comments</h1>
                    <div class="comment-container" >
                    @foreach ($reviews as $review)
                    <div class="comment mt-4 text-justify float-left">
                        <img src="/images/{{ $review->Image}}" alt="" class="rounded-circle" width="60" height="60">
                        <h4>{{ $review->userName }}</h4>
                        <span>{{ $review->date }}</span>
                
                        <div class="mb-1 me-3" style="color: green; font-size: 15px;">
                            @php
                                $rating = $review->Rating;
                                $fullStars = floor($rating);
                                $halfStar = ceil($rating - $fullStars) === 0.5;
                            @endphp
                
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= $fullStars)
                                    <i class="fa fa-star"></i>
                                @elseif ($i - $fullStars === 0.5 && $halfStar)
                                    <i class="fas fa-star-half-alt"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                        </div>
                
                        <p class="mt-1">{{ $review->comments }}</p>
                    </div>
                @endforeach
              </div>
                
                  
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                  <form id="algin-form" action="{{ route('productcomment', ['id_comment' => $product->id]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <h4>Leave a comment</h4>
                        <div class="d-flex align-items-center">
                          <div class="form-group">
                            <label for="Rating">Rating:</label>
                            <div class="rating mt-2">
                              <i class="fas fa-star"  data-rating="1" id="star-1"></i>
                              <i class="fas fa-star" data-rating="2" id="star-2"></i>
                              <i class="fas fa-star" data-rating="3" id="star-3"></i>
                              <i class="fas fa-star" data-rating="4" id="star-4"></i>
                              <i class="fas fa-star" data-rating="5" id="star-5"></i>
                          </div>
                          {{-- <input type="hidden" name="Rating" value='{{ old('Rating') }}' id="rating-input" value="0"> --}}
                          <input type="hidden" name="Rating" id="rating-input" value="{{ old('Rating', '0') }}">

                          
                        </div>
                        
                          
                        </div>

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

                   
                    
                        {{-- <div class="d-flex align-items-center">
                          <ul class="rating mb-3 d-flex list-unstyled">
                              <!-- Add input field for rating -->
                              <input type="date" name="date" class="form-control"  required>
                          </ul>
                      </div> --}}
                        {{-- <label for="comments" class="mt-2">Message</label> --}}
                        <textarea name="comments" id="comments" cols="30" rows="5" class="form-control mt-2" placeholder="Your comment" required>{{ old('comments') }}</textarea>

                        {{-- <textarea name="comments"  id="comments" cols="30" rows="5" class="form-control mt-2" value='{{ old('comments') }}' placeholder="Your comment" required></textarea> --}}
                      </div>
                      @if(auth()->check())
                  
                      @else
                      <div class="form-group">
                        <p class="text-secondary mt-2"><a href="{{ route('login') }}" class="alert-link">Please log in before leaving a comment.</a></p>
                    </div>                  @endif

                    <div id="post1">
                        <button type="submit" class="btn btn-primary py-sm-3 px-sm-4 mt-2">Submit</button>
                    </div>
                </form>
                
                </div>
            </div>
        </div>
    </section>







   <div class="container mt-4">
      <h1 class="mb-3">Similar Items</h1>
  
      <div id="similar-items-carousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
  
              <!-- First Item -->
              <div class="carousel-item active">
                  <div class="row">
                    @foreach ($relatedProducts as $product)
                    <div class="col-md-3 col-sm-6">
                      <div class="product-grid">
                        <div class="product-image" style=" height: 330px; width: 100%;">
                            <a href="#" class="image">
                                <img class="pic-1" src="{{ asset('images/' . $product->image1) }}" style=" height: 330px; width: 100%;">
                                <img class="pic-2" src="{{ asset('images/' . $product->image2) }}" style=" height: 330px; width: 100%;">
                            </a>
                            <a href="#" class="product-like-icon" data-tip="+Cart">
                                <form method="POST" action="{{ route('addcart', ['id' => $product->id]) }}">
                                    @csrf <!-- CSRF token for security -->
                                    <button type="submit" style="background-color: #dbdbdb00; border: none; height: 30px;" >
                                        <i class="fas fa-shopping-cart" style="color: rgb(79, 116, 3)"></i>
                                    </button>
                                </form>
                            </a>
                            <ul class="product-links">
                                <li><a href="{{ route('productdetail', ['id_product' => $product->id]) }}" style="background-color: #dbdbdb9e;"><i class="fa fa-search" style="color: green;"></i></a></li>
                            
                                
                                {{-- <a href="cart.html" style="background-color: #dbdbdb9e;"><i class="fas fa-shopping-cart" style="color: green;"></i></a></li> --}}
                                <li><a href="{{ route('allproduct', ['Category_ID' => $product->CategoryID]) }}" style="background-color: #dbdbdb9e;" ><i class="fa fa-random" style="color: green;"></i></a></li>
                            </ul>
                            
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="#">{{ $product->Name}}</a></h3>
                            <div class="price"> {{ $product->Price}}</div>
                        </div>
                    </div>
                    </div>
                @endforeach
                
                      <!-- Add other items similarly -->
                  </div>
              </div>
  
              <!-- Add other carousel items similarly -->
  
          </div>
  
          <!-- Previous and Next Buttons -->
          <a class="carousel-control-prev" href="#similar-items-carousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#similar-items-carousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
  </div> 
  





    
  
  










@endsection











  