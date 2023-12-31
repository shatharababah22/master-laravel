<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css-dash/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    
    <link href="{{ asset('css-dash/style.css') }}" rel="stylesheet">
  
</head>
<style>
    
body{
    background-image: url('{{ asset('img-dash/back.jpg') }}');
    background-repeat: no-repeat;
    background-size: cover;
}


</style>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4 ">
                    <div class=" rounded p-4 p-sm-5 my-4 mx-3  " style="background-color: rgba(255, 255, 255, 0.286);">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="navbar-brand mx-4 mb-3">
                                <img  src="{{ asset('img-dash/3-removebg-preview.png') }}" width="100px">
                            </a>
                            <h3 style="color: darkolivegreen;">Sign In</h3>
                        </div>

                        <div class="volunteer-form">
                            @if (Session::has('fail'))
                                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        Swal.fire({
                                            title: 'Message',
                                            text: "{{ Session::get('fail') }}",
                                            icon: 'error', // Corrected typo here
                                            showConfirmButton: true,
                                            confirmButtonText: "OK",
                                        });
                                    });
                                </script>
                            @endif
                        </div>
                        
                        <form method="POST" action="{{ route('admin.login') }}">
                            @csrf
                     

                            
                        <!-- Email Address -->
                        <div class="form-floating mb-3 ">
                            <x-text-input type="email" class="form-control bg-transparent" id="email"  type="email"
                            name="email" :value="old('email')" required autofocus
                            autocomplete="username"   placeholder="name@example.com" />
                            <x-input-label for="email" :value="__('email')" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red; background-color:#ffe6e6"  />
                        </div>
                        <div class="form-floating mb-4">
                            <x-text-input type="password" class="form-control bg-transparent" 
                            name="password" required autocomplete="current-password" placeholder="Password" />
                            <x-input-label for="password" :value="__('password')" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red; background-color:#ffe6e6"  />
                        </div>

                        {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input bg-transparent" id="exampleCheck1">
                                <label class="form-check-label " for="exampleCheck1">Check me out</label>
                            </div>
                            <a href="" style="color: darkolivegreen;">Forgot Password</a>
                        </div> --}}


                        <button type="submit" class="btn btn-success py-3 w-100 mb-4">Sign In</button>

                        </form>
                        
                        {{-- <p class="text-center mb-0">Don't have an Account? <a href="signup.html" style="color: darkolivegreen;">Sign Up</a></p> --}}
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script> --}}
    <!-- Template Javascript -->
    {{-- <script src="js/main.js"></script> --}}

    <script src="{{ asset('js-dash/main.js') }}"></script>

</body>

</html>