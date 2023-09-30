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
          <div class="row gx-5">
            <aside class="col-lg-6">
              <div class="border rounded-4 mb-3 d-flex justify-content-center">
                <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                  <img style="max-width: 100%; max-height: 95vh; margin: auto;" class="rounded-4 fit" src="./images/s1.PNG" />
                </a>
              </div>
              <div class="d-flex justify-content-center mb-3">
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
                  <img width="60" height="60" class="rounded-2" src="./images/s2.PNG"/>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="./images/s3.PNG"/></a>
                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" data-type="image" href="./images/s7.PNG" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="./images/s4.PNG"/></a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="./images/s9.PNG"/></a>
                </a>

                </a>
                <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" class="item-thumb">
                    <img width="60" height="60" class="rounded-2" src="./images/s5.PNG"/></a>
                </a>
              </div>
              <!-- thumbs-wrap.// -->
              <!-- gallery-wrap .end// -->
            </aside>
            
            <main class="col-lg-6 mt-4">
              <div class="ps-lg-3">
                <h4 class="title header">
                    Recycled Patchwork Scarf 
                
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
                  <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                  <span class="text-success ms-2">In stock</span>
                </div>
      
                <div class="mb-3">
                  <span class="h5"><span class="del">JOD10</span>  </span>
                  <span class="text-muted">JOD5.75</span>
                </div>
      
                <p>
                    Consider this buttery-soft scarf, made from an earth-friendly cashmere alternative, your new go-to accessory for wrapping yourself in luxurious comfort while also being kind to the planet.
                </p>
      
                <div class="row">
                  <dt class="col-3"  style="color: green;">MADE FROM:</dt>
                  <dd class="col-9">recycled acrylic, cotton, polyester</dd>
      
                  <dt class="col-3"  style="color: green;">NOTES</dt>
                  <dd class="col-9">55% Recycled Acrylic 37% Cotton 8% Polyester</dd>
      
                  <dt class="col-3"  style="color: green;">ITEM ID</dt>
                  <dd class="col-9">51808</dd>
      
                  <dt class="col-3"  style="color: green;">Brand</dt>
                  <dd class="col-9">Reebook</dd>
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
        </div>
      </section>
      <!-- content -->
      
      <!-- <section class="  py-4">
        <div class="container">
          <div class="row gx-4">
            <div class="col-lg-10 mb-4">
              <div class="border rounded-2 px-3 py-2 bg-white">
             
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                  <li class="nav-item d-flex" role="presentation">
                    <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
                  </li>
                  <li class="nav-item d-flex" role="presentation">
                    <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
                  </li>
                  <li class="nav-item d-flex" role="presentation">
                    <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
                  </li>
                 
                </ul>
          
      
  
                <div class="tab-content" id="ex1-content">
                  <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                    <p>
                        
                        When the first few leaves fall, and a cool breeze greets us each morning,
                         we reach for our favorite scarf. You know, the one that cheers us up the second we put it on.
                          We predict this one, with its mix of muted pastel colors and playful, quilt-inspired pattern, will be your new go-to.
                           Its polyester-cotton-acrylic blend is not only made partly from recycled plastic bottles, it's a cruelty-free alternative to cashmere that's just as soft
                            as the real thing. You won't want to leave home without it.
                    </p>
                    <div class="row mb-2">
                      <div class="col-12 col-md-6">
                        <ul class="list-unstyled mb-0">
                          <li><i class="fas fa-check text-success me-2"></i>Sustainable Material</li>
                          <li><i class="fas fa-check text-success me-2"></i>Softness and Comfort</li>
                          <li><i class="fas fa-check text-success me-2"></i>
                            Conscious Fashion Choice</li>
                    
                        </ul>
                      </div>
                      <div class="col-12 col-md-6 mb-0">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-check text-success me-2"></i>Artisanal Craftsmanship</li>
                          <li><i class="fas fa-check text-success me-2"></i>Styling Versatility</li>
                        
                        </ul>
                      </div>
                    </div>
                    <table class="table border mt-3 mb-3">
                      <tr>
                        <th class="py-2">MEASUREMENTS:</th>
                        <td class="py-2">72" L x 12" W</td>
                      </tr>
                      <tr>
                        <th class="py-2">CARE:</th>
                        <td class="py-2">Hand wash cold, lay flat to dry, use only non chlorine bleach if needed, cool iron if needed.</td>
                      </tr>
                      <tr>
                        <th class="py-2">NOTES:</th>
                        <td class="py-2">55% Recycled Acrylic 35% Cotton 8% Polyester 2% Other</td>
                      </tr>
                      
                      <tr>
                        <th class="py-2">Color:</th>
                        <td class="py-2">-</td>
                      </tr>
                    </table>
                  </div>
                <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                    Tab content or sample information now <br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  </div>
                  <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                    Another tab content or sample information now <br />
                    Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                    commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum.
                  </div>
                  <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                    Some other tab content or sample information now <br />
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.
                  </div>
                </div>
        
              </div>
            </div>
            <div class="col-lg-4">
              <div class="px-0 border rounded-2 shadow-0">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Similar items</h5>
                    <div class="d-flex mb-3">
                      <a href="#" class="me-3">
                        <img src="./images/s11.PNG" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                      </a>
                      <div class="info">
                        <a href="#" class="nav-link mb-1">
                            Butterfly Journey Scarf
                        
                        </a>
                        <strong class="text-dark">JOD22.5</strong>
                      </div>
                    </div>
      
                    <div class="d-flex mb-3">
                      <a href="#" class="me-3">
                        <img src="./images/s12.PNG" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                      </a>
                      <div class="info">
                        <a href="#" class="nav-link mb-1">
                            Maya Angelou Still I Rise Scarf
                         
                        </a>
                        <strong class="text-dark">JOD5.25</strong>
                      </div>
                    </div>
      
                    <div class="d-flex mb-3">
                      <a href="#" class="me-3">
                        <img src="./images/s13.PNG" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                      </a>
                      <div class="info">
                        <a href="#" class="nav-link mb-1">Genetics & DNA Scarf</a>
                        <strong class="text-dark">JOD7.85</strong>
                      </div>
                    </div>
      
                    <div class="d-flex">
                      <a href="#" class="me-3">
                        <img src="./images/s14.PNG" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                      </a>
                      <div class="info">
                        <a href="#" class="nav-link mb-1">Repurposed Silk Sari Infinity Scarf</a>
                        <strong class="text-dark">JOD4.75</strong>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
   
      
      


  
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