<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gardener - Gardening Website Template</title>
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
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="./css/sign.css"  rel="stylesheet">
	<script>
		// JavaScript function to toggle between sign-in and sign-up sections
		function toggleSections() {
			const signInSection = document.getElementById('signInSection');
			const signUpSection = document.getElementById('signUpSection');
	
			signInSection.classList.toggle('d-none'); // Hide sign-in section
			signUpSection.classList.toggle('d-none'); // Show sign-up section
		}
	</script>
</head>

<body>













<section>
<div class="row vh-100 signup" id="signupSection" >
    <div class="col-md-7 col-12">
        <div class="fw-medium p-2"><span class="brand fw-bold"><a href="index.html"><img src="./images/3.PNG" width="100px" ></a></div>
        <div class=" sign-container mx-auto">
            <div class="text-center ">
                <h2 class="brand fs-1 my-4">Sign up for an Account</h2>
                <div class="mb-2 mx-auto signin-border"></div>
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <div>
                        <a class="btn btn-square btn-lg rounded-circle me-2" style="width: 3rem; height: 3rem; border-color: rgb(236, 223, 125);" href=""><i class="fab fa-facebook-f fa-2x" style="color: rgb(236, 223, 125)"></i></a>
                    </div>
                    <div>
                        <a class="btn btn-square rounded-circle me-2" style="width: 3rem; height: 3rem; border-color: rgb(236, 223, 125);" href=""><i class="fab fa-twitter fa-2x" style="color: rgb(236, 223, 125)"></i></a>
                    </div>
                    <div>
                        <a class="btn btn-square btn-5x rounded-circle me-2" style="width: 3rem; height: 3rem; border-color: rgb(236, 223, 125);" href=""><i class="fab fa-linkedin-in fa-2x" style="color: rgb(236, 223, 125)"></i></a>
                    </div>
                    <div>
                        <a class="btn btn-square rounded-circle me-2" style="width: 3rem; height: 3rem; border-color: rgb(236, 223, 125);" href=""><i class="fab fa-google fa-2x" style="color:rgb(236, 223, 125)"></i></a>
                    </div>
                </div>
                <div class="pt-4">
                    or sign up using your information
                </div>
         
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="position-relative my-4">
            <x-input-label for="name" :value="__('Name')" class="input-label position-absolute px-2 bg-white z-1"/>
            <x-text-input id="name"  class="form-control inputbox shadow-none p-2" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="position-relative my-4">
            <x-input-label for="email" :value="__('Email')" class="input-label position-absolute px-2 bg-white z-1"/>
            <x-text-input id="email"  class="form-control inputbox shadow-none p-2" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="position-relative my-4">
            <x-input-label for="password" :value="__('Password')" class="input-label position-absolute px-2 bg-white z-1"/>

            <x-text-input id="password"  class="form-control inputbox shadow-none p-2"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="position-relative my-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="input-label position-absolute px-2 bg-white z-1" />

            <x-text-input id="password_confirmation"  class="form-control inputbox shadow-none p-2"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="d-flex justfiy-start mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="btn btn-primary btn-box py-sm-2 px-sm-5 mt-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
                
            </div>
        </div>
   

    </div> 
    
    <div class="col-md-5 col-12 right-box d-flex" id="rightBox">
        <div class="text-center m-auto m-5 p-5" style="background-color: rgba(240, 248, 255, 0.795);">
            <h2 class="fw-bolder fs-1 my-4">Hello, Friend!</h2>
            <div class="signin-border border border-2 mx-auto mb-1" style="color:#2c6a39;"></div>
            <span class="mt-3">If you have account?Login Now</span><br>
            
            <a href="{{ route('login') }}" class="btn btn-primary btn-box py-sm-2 px-sm-5 mt-3" >Login</a>
        </div>
    </div>

    
    </div>




    

</section>







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>









