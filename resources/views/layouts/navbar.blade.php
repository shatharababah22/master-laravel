<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('llib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    
  
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}"  rel="stylesheet">
    <link href="{{ asset('css/details.css') }}"   rel="stylesheet">
    <link href="{{ asset('css/sign.css') }}"   rel="stylesheet">


    <link rel="stylesheet"  href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"/>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    

</head>

<body>



    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>+962-790-751376</span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>rocompany18@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href="https://web.facebook.com/shatha.rababah.7/"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href="https://www.linkedin.com/in/shatha-rababah/"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href="https://www.instagram.com/Shatharababah/?fbclid=IwAR1ZE7Xkx7Y7eLcZ2K1rrgtP9hsOvTRtTNdBQzHhqhn4RJNqdg4eGSU5OZY"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
 <img src="{{ asset('images/3.PNG') }}" alt="Image Description" width="100px">

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                <a href="All-product.html" class="nav-item nav-link">Our Products</a>
                <a href="#courses" class="nav-item nav-link">Courses</a>
               
                {{-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="service.html" class="dropdown-item">Services</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="" class="dropdown-item">How I can recycle</a>
                        
                        <a href="#testimonial" class="dropdown-item">Testimonial</a>
                       
                    </div>
                </div> --}}
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                {{-- @if (Auth::check())
                @php
                    $cartCount = \App\Cartitem::where('UserID', Auth::user()->id)->count();
                @endphp
            @else
                @php
                    $cart = session('cart');
                    $cartCount = is_array($cart) ? count($cart) : 0;
                @endphp
            @endif --}}
{{--             
            <a href="{{ route('cart') }}" class="nav-item nav-link">
                <i class="bi bi-cart" style="font-size: 20px"></i>
                <span style="font-size: 15px; vertical-align: middle;  color:darkgreen;">({{ $cartCount }})</span>
            </a> --}}
            
         

            </div>
            @if (Auth::check())
            
                        {{-- <li> <a href="{{ route('profile.edit', [Auth::user()]) }}"
                                class="nav-item">{{ Auth::user()->name }}</a></li> --}}
                        {{-- <form style="display: inline-block" method="POST" class="nav-item"
                            action="{{ route('logout') }}">
                            @csrf

                             <a href="{{ route('logout') }}" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block" style="font-size: 17px"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                    <i class="fa fa-arrow-right ms-3"></i> </a>
                        </form> --}}
                              <!-- Avatar -->
                              <div class="dropdown me-2">
                                <button class="btn b dropdown-toggle custom-button1 " type="button" id="navbarDropdownMenuAvatar" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="/images/{{ Auth::user()->Image }}" class="rounded-circle "  width="48" alt="Black and White Portrait of a Man" loading="lazy">
                                </button>
                                
                                
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                                    <li><a href="{{ route('profile.edit', [Auth::user()]) }}"
                                        class="nav-item ms-3">My profile</a></li>
                                  <li>
                                    <form method="POST" class="dropdown-item" action="{{ route('logout') }}">
                                      @csrf
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                        
                                      </a>
                                    </form>
                                  </li>
                                </ul>
                              </div>
                              
                    @else
                    <a href="/login" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block " style="font-size: 17px">
                    <i class="fa fa-arrow-right ms-3 me-1"></i>       Login</a>
                        {{-- <li><a href="/register" class="login-panel"></i>Register</a></li> --}}
                    @endif
            {{-- <a href="signup.html" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Sign up<i class="fa fa-arrow-right ms-3"></i></a> --}}
        </div>
    </nav>
    <!-- Navbar End -->




 