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
                <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                  <img style="max-width: 100%; max-height: 95vh; margin: auto;" class="rounded-4 fit" src="{{ asset('images/' . $product->image1) }}" />
                </a>
              </div>
              <div class="d-flex justify-content-center mb-3">
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
                  <img width="60" height="60" class="rounded-2" src="{{ asset('images/' . $product->image2) }}"/>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="{{ asset('images/' . $product->image3) }}"/></a>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" href="./images/s7.PNG" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="{{ asset('images/' . $product->image4) }}"/></a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="{{ asset('images/' . $product->image5) }}"/></a>
                </a>

                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="{{ asset('images/' . $product->image5) }}"/></a>
                </a>
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
                  <div class=" mb-1 me-3" style="color: green; font-size: 17px;">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span class="ms-1">
                      4.5
                    </span>
                  </div>
                  <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>{{ $product->Stockquantity}}</span>
                  <span class="text-success ms-2">In stock</span>
                </div>
      
                <div class="mb-3">
                  <span class="h5"><span class="del">{{ $product->Price}}</span>  </span>
                  <span class="text-muted">JOD5.75</span>
                </div>
      
                <p>
                    Consider this buttery-soft scarf, made from an earth-friendly cashmere alternative, your new go-to accessory for wrapping yourself in luxurious comfort while also being kind to the planet.
                </p>
      
                <div class="row">
                  <dt class="col-3"  style="color: green;">MADE FROM:</dt>
                  <dd class="col-9">{{ $product->MADEFROM}}</dd>
      
                  <dt class="col-3"  style="color: green;">NOTES</dt>
                  <dd class="col-9"> {{ $product->NOTES}}	</dd>
      
                  <dt class="col-3"  style="color: green;">ITEM ID</dt>
                  <dd class="col-9">{{ $product->ItemId}}</dd>
      
                  <dt class="col-3"  style="color: green;">Brand</dt>
                  <dd class="col-9">{{ $product->Brand}}</dd>
                </div>
      
                <hr />
      
                <div class="row mb-4">
                  <div class="col-md-4 col-6 ">
                    <label class="mb-2 ">Length</label>
                    <select class="form-select border border-secondary" style="height: 35px;">
                      <option>200cm</option>
                      <option>150m</option>
                      <option>0.5m</option>
                    </select>
                  </div>
                  <!-- col.// -->
                  <div class="col-md-4 col-6 mb-3">
                    <label class="mb-2 d-block">Quantity</label>
                    <div class="input-group mb-2" style="width: 170px;">
                      <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                        <i class="fas fa-minus"></i>
                      </button>
                      <input type="text" class="form-control text-center border border-secondary" placeholder="2" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                      <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                        <i class="fas fa-plus"></i>
                      </button>
                    </div>
                  </div>
                </div>
                <a href="checkout.html" class="btn btn-warning shadow-0"> Buy now </a>
                <a href="cart.html" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                <a href="#" class="btn btn-light  icon-hover px-3"><i class="me-1 fa fa-heart fa-lg " style="color: green;"></i> Save </a>
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
                    <div class="comment mt-4 text-justify float-left">
                        <img src="./images/shatha.jpg" alt="" class="rounded-circle" width="60" height="60">
                        <h4>Shatha Rababah</h4>
                       
                        <span>21 October, 2023</span>
                       
                        <div class=" mb-1 me-3" style="color: green; font-size: 15px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                           
                          </div>
                        
                        <p class="mt-1"> "Absolutely in love with my Recycled Patchwork Scarf! The blend of colors and textures is stunning, and it's unbelievably soft. It's become my go-to accessory for both style and sustainability."</p>
                    </div>
                    <div class="text-justify darker mt-4 float-right">
                        <img src="./images/sohieb.jpg" alt="" class="rounded-circle" width="60" height="60">
                        <h4>Sohieb Rababa</h4>
                        <span>20 December, 2022</span>
                        <br>
                        <div class=" mb-1 me-3" style="color: green; font-size: 15px;">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="far fa-star fa-sm"></i>
                            <i class="far fa-star fa-sm"></i>
                 
                           
                          </div>
                        <p class="mt-1"> "I adore how versatile this scarf is. I can dress it up for formal events or use it to add flair to a casual outfit. Its recycled composition makes it a guilt-free indulgence that I'm proud to wear."</p>
                    </div>
                    <div class="comment mt-4 text-justify">
                        <img src="./images/sereen.jpg" alt="" class="rounded-circle" width="60" height="60">
                        <h4>Sereen Qamhieh</h4>
                        <span>- 20 June, 2023</span>
                        <br>
                        <p class="mt-1">"Not only is this scarf visually appealing with its patchwork design, but it also feels amazing against my skin.</p>
                    </div>
                  
                </div>
                <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                    <form id="algin-form">
                        <div class="form-group">
                            <h4>Leave a comment</h4>
                            <div class="d-flex align-items-center">
                            <ul class="rating mb-3 d-flex list-unstyled">
                                <li>
                                  <i class="far fa-star fa-sm " style="color: green; font-size: 17px;" title="Bad"></i>
                                </li>
                                <li>
                                  <i class="far fa-star fa-sm " style="color: green; font-size: 17px;" title="Poor"></i>
                                </li>
                                <li>
                                  <i class="far fa-star fa-sm " style="color: green; font-size: 17px;" title="OK"></i>
                                </li>
                                <li>
                                  <i class="far fa-star fa-sm " style="color: green; font-size: 17px;" title="Good"></i>
                                </li>
                                <li>
                                  <i class="far fa-star fa-sm " style="color: green; font-size: 17px;" title="Excellent"></i>
                                </li>
                              </ul>
                            </div>
                            <label for="message">Message</label>
                            <textarea name="msg" id=""msg cols="30" rows="5" class="form-control" ></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <p class="text-secondary mt-2">If you have a <a href="#" class="alert-link">gravatar account</a> your address will be used to display your profile picture.</p>
                        </div>
                       
                          <div id="post1" > 
                            <a href="" class="btn btn-primary py-sm-3 px-sm-4 mt-4">Submit</a>
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
                      <div class="col-md-3 col-sm-6">
                          <div class="product-grid">
                              <div class="product-image">
                                  <a href="#" class="image">
                                    <img class="pic-1 rounded-3" src="images/s11.PNG">
                                    <img class="pic-2 rounded-3" src="images/s11.PNG">
                                  </a>
                                  <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                      <i class="far fa-heart"></i>
                                  </a>
                                  <ul class="product-links">
                                      <li><a href="Produc-details.html" style="background-color: #dbdbdb9e;"><i class="fa fa-search" style="color: rgb(4, 91, 4);"></i></a></li>
                                      <li><a href="cart.html" style="background-color: #dbdbdb9e;"><i class="fas fa-shopping-cart" style="color: rgb(4, 91, 4);"></i></a></li>
                                      <li><a href="All-product.html" style="background-color: #dbdbdb9e;"><i class="fa fa-random" style="color: rgb(4, 91, 4);"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image">
                                  <img class="pic-1 rounded-3" src="images/s11.PNG">
                                  <img class="pic-2 rounded-3" src="images/s11.PNG">
                                </a>
                                <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                    <i class="far fa-heart"></i>
                                </a>
                                <ul class="product-links">
                                  <li><a href="Produc-details.html" style="background-color: #dbdbdb9e;"><i class="fa fa-search" style="color: rgb(4, 91, 4);"></i></a></li>
                                  <li><a href="cart.html" style="background-color: #dbdbdb9e;"><i class="fas fa-shopping-cart" style="color: rgb(4, 91, 4);"></i></a></li>
                                  <li><a href="All-product.html" style="background-color: #dbdbdb9e;"><i class="fa fa-random" style="color: rgb(4, 91, 4);"></i></a></li>
                              </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="product-grid">
                          <div class="product-image">
                              <a href="#" class="image">
                                <img class="pic-1 rounded-3" src="images/s11.PNG">
                                <img class="pic-2 rounded-3" src="images/s11.PNG">
                              </a>
                              <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                  <i class="far fa-heart"></i>
                              </a>
                              <ul class="product-links">
                                <li><a href="Produc-details.html" style="background-color: #dbdbdb9e;"><i class="fa fa-search" style="color: rgb(4, 91, 4);"></i></a></li>
                                <li><a href="cart.html" style="background-color: #dbdbdb9e;"><i class="fas fa-shopping-cart" style="color: rgb(4, 91, 4);"></i></a></li>
                                <li><a href="All-product.html" style="background-color: #dbdbdb9e;"><i class="fa fa-random" style="color: rgb(4, 91, 4);"></i></a></li>
                            </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                              <img class="pic-1 rounded-3" src="images/s11.PNG">
                                      <img class="pic-2 rounded-3" src="images/s11.PNG">
                            </a>
                            <a href="#" class="product-like-icon" data-tip="Add to Wishlist">
                                <i class="far fa-heart"></i>
                            </a>
                            <ul class="product-links">
                              <li><a href="Produc-details.html" style="background-color: #dbdbdb9e;"><i class="fa fa-search" style="color: rgb(4, 91, 4);"></i></a></li>
                              <li><a href="cart.html" style="background-color: #dbdbdb9e;"><i class="fas fa-shopping-cart" style="color: rgb(4, 91, 4);"></i></a></li>
                              <li><a href="All-product.html" style="background-color: #dbdbdb9e;"><i class="fa fa-random" style="color: rgb(4, 91, 4);"></i></a></li>
                          </ul>
                        </div>
                    </div>
                </div>
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