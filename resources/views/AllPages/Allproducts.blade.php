@extends('layouts.Master')
@section('title', 'PRO')
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


    <div class="container py-5  wow fadeInUp pro1 " data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav layout_tab_nav ul_li mr-2" role="tablist">
                        <li>
                            <button class="active custom-button ml-2" data-bs-toggle="tab" data-bs-target="#grid_layout" type="button" role="tab" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 12 12">
                                    <path id="grid" class="cls-1" d="M1784,905h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Zm-10,5h2v2h-2v-2Zm5,0h2v2h-2v-2Zm5,0h2v2h-2v-2Z" transform="translate(-1784 -905)" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <h4 class="show_result ml-2" style="margin-left:10px;">Showing 1–9 of 50 results</h4>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="nav layout_tab_nav ul_li mr-2 justify-content-end" role="tablist">
                        <li>
                            <div class="input-group">
                                <div class="form-outline">
                                    <input id="search-input" type="search" id="form1" class="form-control"  placeholder="Search"/>
                                 
                                </div>
                                <button id="search-button" type="button" class="btn2 btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
 <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-3 mt-4  ">
            <div class="col product  m-3 ">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image mt-3">
                        <img class="img-1" src="images/b5.png">
                        <img class="img-2 mt-2" src="images/b18.PNG">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="Produc-details.html"><i class="fa fa-random"></i></a></li>
                        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="disable">(1 reviews)</li>
                    </ul>
                    <h3 class="title"><a href="#"> Glass Solar Pumpkin Stake </a></h3>
                    <div class="price">JOD50</div>
                </div>
            </div>
        </div>
        <div class="col product m-3">
            <div class="product-grid ">
                <div class="product-image mt-3">
                    <a href="#" class="image">
                        <img class="img-1" src="images/b6.PNG">
                        <img class="img-2" src="images/b21.PNG">
                    </a>
                    <span class="product-hot-label">hot</span>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="Produc-details.html"><i class="fa fa-random"></i></a></li>
                        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="disable">(3 reviews)</li>
                    </ul>
                    <h3 class="title"><a href="#">As We Grow Anniversary Milestone Tree</a></h3>
                    <div class="price "> <span class="del">JOD15</span>JOD20 </div>
                </div>
            </div>
        </div>
        <div class="col product m-3">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#" class="image mt-3">
                        <img class="img-1" src="images/b4.PNG">
                        <img class="img-2 mt-2" src="images/b19.PNG">
                    </a>
                    <ul class="product-links">
                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                        <li><a href="Produc-details.html"><i class="fa fa-random"></i></a></li>
                        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                </div>
                <div class="product-content">
                    <ul class="rating">
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star"></li>
                        <li class="fas fa-star disable"></li>
                        <li class="disable">(1 reviews)</li>
                    </ul>
                    <h3 class="title"><a href="#">Reclaimed Wood Serving Board & Cloche</a></h3>
                    <div class="price">JOD30</div>
                </div>
            </div>
        </div>
    </div>
                      
   

                        <div class="row row-cols-1 row-cols-md-3 g-3 mt-4 ">
                            <div class="col product m-3">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image mt-3">
                                        
                                      <img class="img-1" src="images/b7.PNG">
                                     <img class="img-2 mt-2" src="images//b16.PNG">
                                    </a>
                                    <ul class="product-links">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-content">
                                    <ul class="rating">
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star disable"></li>
                                        <li class="disable">(1 reviews)</li>
                                    </ul>
                                    <h3 class="title"><a href="#"> Glass Solar Pumpkin Stake </a></h3>
                                    <div class="price">JOD50</div>
                                </div>
                            </div>
                        </div>
                        <div class="col product m-3">
                            <div class="product-grid ">
                                <div class="product-image mt-3">
                                    <a href="#" class="image">
                                    
                                          <img class="img-1" src="images/b8.PNG">
                                        <img class="img-2 mt-2" src="images//b17.PNG">

                                    </a>
                                    <span class="product-hot-label">hot</span>
                                    <ul class="product-links">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-content">
                                    <ul class="rating">
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star disable"></li>
                                        <li class="fas fa-star disable"></li>
                                        <li class="disable">(3 reviews)</li>
                                    </ul>
                                    <h3 class="title"><a href="#">As We Grow Anniversary Milestone Tree</a></h3>
                                    <div class="price "> <span class="del">JOD15</span>JOD20 </div>
                                </div>
                            </div>
                        </div>
                        <div class="col product m-3">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="#" class="image mt-3">
                                        <img class="img-1" src="images/b9.PNG">
                        <img class="img-2 mt-2" src="images//b15.PNG">
                                    </a>
                                    <ul class="product-links">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-random"></i></a></li>
                                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                                </div>
                                <div class="product-content">
                                    <ul class="rating">
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star"></li>
                                        <li class="fas fa-star disable"></li>
                                        <li class="disable">(1 reviews)</li>
                                    </ul>
                                    <h3 class="title"><a href="#">Reclaimed Wood Serving Board & Cloche</a></h3>
                                    <div class="price">JOD30</div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="row row-cols-1 row-cols-md-3 g-3 mt-4 ">
                        <div class="col product m-3">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image mt-3">
                                    <img class="img-1" src="images/b5.png">
                                    <img class="img-2 mt-2" src="images/b18.PNG">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star disable"></li>
                                    <li class="disable">(1 reviews)</li>
                                </ul>
                                <h3 class="title"><a href="#"> Glass Solar Pumpkin Stake </a></h3>
                                <div class="price">JOD50</div>
                            </div>
                        </div>
                    </div>
                    <div class="col product m-3">
                        <div class="product-grid ">
                            <div class="product-image mt-3">
                                <a href="#" class="image">
                                    <img class="img-1" src="images/b6.PNG">
                                    <img class="img-2" src="images/b21.PNG">
                                </a>
                                <span class="product-hot-label">hot</span>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star disable"></li>
                                    <li class="fas fa-star disable"></li>
                                    <li class="disable">(3 reviews)</li>
                                </ul>
                                <h3 class="title"><a href="#">As We Grow Anniversary Milestone Tree</a></h3>
                                <div class="price "> <span class="del">JOD15</span>JOD20 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col product m-3">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="#" class="image mt-3">
                                    <img class="img-1" src="images/b4.PNG">
                                    <img class="img-2 mt-2" src="images/b19.PNG">
                                </a>
                                <ul class="product-links">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-random"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                                <a href="#" class="product-view"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="product-content">
                                <ul class="rating">
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star"></li>
                                    <li class="fas fa-star disable"></li>
                                    <li class="disable">(1 reviews)</li>
                                </ul>
                                <h3 class="title"><a href="#">Reclaimed Wood Serving Board & Cloche</a></h3>
                                <div class="price">JOD30</div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>

<div class="pagination-container">
    <a class="pagination-newer" href="#">PREV</a>
<div class="pagination page-center">	

	<input id="dot-1" type="radio" name="dots">	
	<label class="label" for="dot-1"></label>	
	<input  id="dot-2" type="radio" name="dots">
	<label class="label" for="dot-2"></label>	
	<input id="dot-3" type="radio" name="dots" checked="checked">
	<label  class="label" for="dot-3"></label>	
	<input id="dot-4" type="radio" name="dots">
	<label class="label" for="dot-4"></label>	
	<input id="dot-5" type="radio" name="dots">
	<label  class="label" for="dot-5"></label>	
	<input id="dot-6" type="radio" name="dots">
	<label  class="label" for="dot-6"></label>	
	<input id="dot-7" type="radio" name="dots">
	<label  class="label" for="dot-7"></label>	
	<input id="dot-8" type="radio" name="dots">
	<label  class="label" for="dot-8"></label>
	<div class="pacman"></div>
</div>
<a class="pagination-older" href="#">NEXT</a>
</div>

























@endsection