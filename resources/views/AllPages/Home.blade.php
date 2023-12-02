@extends('layouts.Master')
@section('title', 'PRO')
@section('content')


<style>


.read-more-container{
    display: flex;
    flex-direction: column;
    color: #111;

}

.read-more-btn{
    color: #066922;
}

.read-more-text{
    display: none;
}

.read-more-text--show{
    display: inline;
}


</style>


    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img class="w-100 " src="images/2.PNG" alt="Image">
                    <div class="carousel-caption ">
                        <div class="container">
                            <div class="row justify-content-end imp">
                                <div class="col-lg-8">
                                    <h1 class="display-1  mb-4 animated slideInDown header header1" style="color: rgb(15,66,41);">PRO Company</h1>
                                    <qoute class="paraghra">"Embrace the chance to support our planet's well-being by choosing recycled products, empowering environmental preservation. Join the movement to safeguard our Earth's future while shopping consciously."</qoute><br>
                                    <a href="{{ route('about') }}" class="btn btn-primary py-sm-3 px-sm-4 mt-4">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="images/4new.PNG" alt="Image">
                    <div class="carousel-caption">
                        <div class="container ">
                            <div class="row justify-content-end caption  imp">
                                <div class="col-lg-7">
                                    <h1 class="display-1  mb-4 animated slideInDown header header1"  style="color: rgb(15,66,41);" >Recycled Products</h1>
                                    <qoute class="paraghra"> Explore our collection and discover how each item can contribute to a cleaner,
                                        healthier planet. By embracing recycled products, you're making a
                                         statement that transcends trends and fosters lasting change.</qoute><br>
                                    <a href="{{ route('allproduct', ['Category_ID' => 1]) }}" class="btn btn-primary btn-box py-sm-3 px-sm-4 mt-4">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <img class="w-100" src="images/5.PNG" alt="Image">
                    <div class="carousel-caption ">
                        <div class="container">
                            <div class="row justify-content-end caption imp">
                                <div class="col-lg-7">
                                    <h1 class="display-1  mb-4 animated slideInDown header header1"  style="color: rgb(15,66,41);" >COURCES</h1>
                                    <qoute class="paraghra">In a world grappling with environmental challenges, 
                                        understanding the nuances of recycling is crucial.Whether 
                                        you're an individual seeking to adopt greener habits or a business
                                         aiming to enhance its sustainability practices, our courses have something for everyone.
                                       </qoute><br>
                                    <a href="#courses" class="btn btn-primary btn-box py-sm-3 px-sm-4 mt-4">Join Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Top Feature Start -->
    <div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="bi bi-check2-circle text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Quality Product</h4>
                                <span>Top-notch item reflecting high standards of excellence and durability.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="bi bi-arrow-return-left text-primary"></i>

                            </div>
                            <div class="ps-3">
                                <h4>14-Day Return</h4>
                                <span>
                                    Two-week duration available for returning or exchanging purchased items.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <span>
                                    Always accessible, day and night, without interruption.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Feature End -->


    <!-- About Start -->
    <div class="container py-5">

        <!-- Start about section -->
        <section class="about">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">About Us</p>
                <h1 class="display-5 mb-5">
                    Discovering more about us.
                </h1>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <p class="custom-mt-7 about-parag">At <b>PRO Company</b>, we are committed to making a positive impact
                        on the environment.
                        That's why we've launched our e-commerce recycling program to encourage sustainable practices
                        among
                        our valued customers.
                        When you shop with us, you can now easily recycle your used items and give them a second life.
                        Our recycling program allows you to responsibly dispose of items like electronics, clothing,
                        and more.</p>

                    <div class="btn-box">
                        <a  href="{{ route('about') }}" class="btn btn-primary">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="images/image_png (19).png" class="img-fluid" alt="About Us Image">
                </div>
            </div>
        </section>
        <!-- end about section -->
    </div>
    <!-- About End -->

    
    <!-- Facts Start -->
<div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="images/imp1.jpg">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{$users}}</h1>
                <span class="fs-5 fw-semi-bold text-light">Customer satisfaction</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{$totalQuantity}}</h1>
                <span class="fs-5 fw-semi-bold text-light">Recycled Items Sold</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{$products_count}}</h1>
                <span class="fs-5 fw-semi-bold text-light">Count of Products</span>
            </div>
            <div class="col-sm-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                <h1 class="display-4 text-white" data-toggle="counter-up">{{$recycler}}</h1>
                <span class="fs-5 fw-semi-bold text-light">Number of Recyclers</span>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->






 <!-- Catgories Start -->
 <div class="container-xxl py-5 ">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Our Catgories</p>
            <h1 class="display-5 mb-5">Some Of Our Assortment</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters">
                    <li class="mx-2 active" data-filter="*">All</li>
                    <li class="mx-2" data-filter=".first">Related to</li>
                    <li class="mx-2" data-filter=".second">Ongoing catgories</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container">
            @foreach ($categories as $category)
                
           
            <div class="col-lg-3 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                <div class="portfolio-inner  rotating-border">
                    <img class="img-fluid" src="/images/{{ $category->Image }}" alt="">
                    <div class="portfolio-text">
                        <h4 class="text-white mb-4">{{$category->Name}}</h4>
                        <div class="d-flex">
                            <a class="btn btn-lg-square rounded-circle mx-2" href="{{ route('allproduct', ['Category_ID' => $category->id]) }}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square rounded-circle mx-2" href="https://www.epa.gov/recycle/how-do-i-recycle-common-recyclables"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Catgories End -->

<br><br>




    <!-- Service Start -->
    <div class="container-xxl py-5" id="Services">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Services</p>
                <h1 class="display-5 mb-5">Services That We Offer For You</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/Services1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/store.png" alt="Icon"  width="45px">
                            </div>
                            <h4 class="mb-3">Recycling Center Operations</h4>
                            <p class="mb-4">Material Sorting: Establish a recycling facility to sort and process different types of
                                 recyclable materials, such as plastics, paper, glass, and metals</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/services2.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/workshop.png" alt="Icon" width="45px">
                            </div>
                            <h4 class="mb-3">Educational Workshops and Cources</h4>
                            <p class="mb-4">Organize workshops, seminars, and school programs to educate the public about recycling and waste reduction.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/services3.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/paper.png" alt="Icon"  width="45px">
                            </div>
                            <h4 class="mb-3">Document Shredding and Paper Recycling</h4>
                            <p class="mb-4">Secure Document Shredding: Provide secure document destruction services for businesses and individuals.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/services4.jpg" alt="" >
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/recycle.png" alt="Icon" width="55px">
                            </div>
                            <h4 class="mb-3">Upcycling and Repurposing</h4>
                            <p class="mb-4">Partner with artists and designers to transform recycled materials into innovative products.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/Services5.jpg"  alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/insurance.png" alt="Icon" width="55px">
                            </div>
                            <h4 class="mb-3">Recycling Pickup Points</h4>
                            <p class="mb-4">Set up convenient drop-off points where people can bring their recyclables for collection</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="images/services6.webp" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/bottle.png" alt="Icon" width="55px">
                            </div>
                            <h4 class="mb-3">Retail of Recycled Products</h4>
                            <p class="mb-4">Operate a store that sells products made from recycled materials, supporting sustainable consumer choices</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





      <!-- Subscribe Start -->
  <section class="Subscribe_Start layout_padding-bottom">
    <div class="container-fluid  my-5">
      <div class="row justify-content-md-center py-5 px-xl-5">
          <div class="col-md-6 col-12 py-5">
              <div class="text-center  pb-2">
                  <h2 class="section-title px-5 mb-3"><span class=" px-2">Protect and Profit
                  </span></h2>
                  <p>
                    "When you click the button, you will be directed to locations with our recycling bins. Additionally, there is a form through which you can submit items you want to recycle, whether they are related to plastic, glass, or paper.
                     Afterwards, you will receive a discount coupon on our products based on quantity of the materials you have provided."</p>
              </div>
        
                  
                     
                      <div class="button1 mx-auto">
                        <button class="btn1 btn-primary mx-auto" style="height: 50px;">
                            <a href="{{ route('form') }}" style="color: white;">Click here</a>
                        </button>
                                                </div>
              
          </div>
      </div>
  </div>
  </section>
  <!-- Subscribe End -->




  <!-- best-seller -->

  <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
    <p class="fs-5 fw-bold text-primary">New Arrivals</p>
    <h1 class="display-5 mb-5">Recently Received Products</h1>
</div>


  <div class="container row mx-auto mt-4">
    @foreach ($products as $product)
        
 
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
                    <li><a href="{{ route('allproduct', ['Category_ID' => $product->CategoryID]) }}" style="background-color: #dbdbdb9e;"><i class="fa fa-random" style="color: green;"></i></a></li>
                </ul>
                
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">{{ $product->Name}}</a></h3>
                <div class="price"> {{ $product->Price}}</div>
            </div>
        </div>
    </div>

    @endforeach

   
    

</div>





    
  





    <!-- Contact us Start -->
    <div class="container-fluid quote my-5 mt-5 py-5 " data-parallax="scroll" data-image-src="images/imp.jpg">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-white rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="display-5 text-center mb-5">Contact Us</h1>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="gname" placeholder="Gurdian Name">
                                    <label for="gname">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" id="gmail" placeholder="Gurdian Email">
                                    <label for="gmail">Your Email</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cname" placeholder="Child Name">
                                    <label for="cname">Your Mobile</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" id="cage" placeholder="Child Age">
                                    <label for="cage">Service Type</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-light border-0" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact us End -->



      <!-- Features Start -->
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Why Choosing Us!</p>
                    <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Firstly, our unwavering dedication to preserving the planet's resources
                         is evident in every aspect of our operations. By offering a diverse range of recycled items, we empower our customers to play an active role in reducing their carbon footprint and promoting a circular economy. This ethos resonates with individuals who prioritize eco-friendly
                         choices and aspire to</p>
                    <a class="btn btn-primary py-3 px-4" href="{{ route('about') }}">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-check fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">100% Satisfaction</h4>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                        <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                            <i class="fa fa-users fa-3x text-primary"></i>
                                        </div>
                                        <h4 class="mb-0">Dedicated Team</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                            <div class="text-center rounded py-5 px-4" style="box-shadow: 0 0 45px rgba(0,0,0,.08);">
                                <div class="btn-square bg-light rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                                    <i class="fa fa-tools fa-3x text-primary"></i>
                                </div>
                                <h4 class="mb-0">Modern Equipment</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    
    


   

    <!-- courses section  -->
    <div class="courses-area layout_padding-top layout_padding2-bottom" id="courses">
        <div class="container ">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-bold text-primary">Our Courses</p>
                <h1 class="display-5 mb-5">
                     Courses That We Offer For You</h1>
            </div>
            <div class="row courses-actives ">
                <!-- Single -->

                <div class=" properties pb-20 col-lg-4 col-md-6">
                    <div class="properties__card pb-4">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="images/image_png (20).png"></a>
                        </div>
                        <div class="properties__caption">
                            
                            <h3><a href="#">Intro to Recycling and Waste </a></h3>
                            <p>Understanding the waste hierarchy (reduce, reuse, recycle)
                             and Differentiating between different types of waste (biodegradable, non-biodegradable, hazardous)

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half"></i>
                                    </div>
                                    <p><span>(4.5)</span> based on 150</p>
                                </div>
                                <div class="price">
                                    <span>JOD 100</span>
                                </div>
                            </div>
                            <div class="btn-box">
                             <a href="" class="btn1 ">
                                Record Now
                             </a>
                          </div>
                        </div>

                    </div>
                </div>
                <!-- Single -->
            
                <!-- Single -->
                <div class="properties pb-20 col-lg-4 col-md-6">
                    <div class="properties__card pb-4">
                        <div class="properties__img overlay1">
                            <a href="#"><img src="images/Capture.PNG50.PNG" alt=""></a>
                        </div>
                        <div class="properties__caption">
                           
                            <h3><a href="#">Recycling at Home and in the Community </a></h3>
                            <p>Practical tips for setting up a recycling system at home
                             ,Identifying recyclable materials in your household waste and
                             Proper ways to clean and prepare recyclables for collection

                            </p>
                            <div class="properties__footer d-flex justify-content-between align-items-center">
                                <div class="restaurant-name">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        
                                    </div>
                                    <p><span>(5)</span> based on 120</p>
                                </div>
                                <div class="price">
                                    <span>JOD 200</span>
                                </div>
                            </div>
                            <div class="btn-box">
                             <a href="" class="btn1">
                             Record Now
                             </a>
                          </div>
                        </div>

                    </div>
                </div>
                <!-- Single -->
    <!-- Single -->
    <div class="properties pb-20 col-lg-4 col-md-6">
        <div class="properties__card pb-4">
            <div class="properties__img overlay1">
                <a href="#"><img src="images/image_png (21).png" alt=""></a>
            </div>
            <div class="properties__caption">
            
                <h3><a href="#">Learn to recycle plastics into art works</a></h3>
                <p>Understand the different types of plastic (PET, HDPE, PVC, etc.) and their recycling codes.
                 Learn which types of plastics are more suitable for artistic projects due to their properties .
                </p>
                <div class="properties__footer d-flex justify-content-between align-items-center">
                    <div class="restaurant-name">
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half"></i>
                        </div>
                        <p><span>(4.5)</span> based on 200</p>
                    </div>
                    <div class="price">
                        <span>JOD 180</span>
                    </div>
                </div>
                <div class="btn-box">
                 <a href="" class="btn1">
                    Record Now
                 </a>
              </div>
            </div>
        </div>
    </div>
    <!-- Single -->
            </div>
        </div>
    </div>
    <!-- Courses area End -->




      <!-- client section -->
      <section class="client_section layout_padding" id="testimonial">
        <div class="container">
           
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.02s" style="max-width: 500px;">
                    <p class="fs-5 fw-bold text-primary">Our Customer</p>
                    <h1 class="display-5 mb-5">Customer's Testimonial</h1>
                </div>
           <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel">
                    @foreach ($Testimonials as $key => $Testimonial)
                        <div class="carousel-item @if ($key === 0) active @endif">
                            <div class="box col-lg-10 mx-auto">
                                <div class="img_container">
                                    <div class="img-box">
                                        <div class="img_box-inner">
                                            <img src="/images/{{ $Testimonial->Image }}" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="detail-box">
                                    <h5>{{ $Testimonial->Name }}</h5>
                                    <h6>{{ $Testimonial->Major }}</h6>


                                    <div class="causes-text read-more-container">
                                        {{-- <h3>{{ $product->shortname }}</h3> --}}
                                        <p>
                                            {{ $Testimonial->truncated_description }}<span class="read-more-text">{{ $Testimonial->showmore_description }}</span>
                                        </p>
                                        <span class="read-more-btn">Read More...</span>
                                    </div>

                                    {{-- <p>{{ $Testimonial->comments }}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
             

              </div>
              <div class="carousel_btn_box">
                 <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                 <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                 <span class="sr-only">Previous</span>
                 </a>
                 <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                 <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                 <span class="sr-only">Next</span>
                 </a>
              </div>
           </div>
        </div>
     </section>
     <!-- end client section -->






     <script src= {{ asset("js/main.js") }} ></script>
     <script src= {{ asset("showMore.min.js") }} ></script>

<script>
 const readMoreButtons = document.querySelectorAll('.read-more-btn');

readMoreButtons.forEach(button => {
button.addEventListener('click', event => {
 const current = event.target;
 const currentText = current.parentNode.querySelector('.read-more-text');
 currentText.classList.toggle('read-more-text--show');
 current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";
});
});

</script>


@endsection