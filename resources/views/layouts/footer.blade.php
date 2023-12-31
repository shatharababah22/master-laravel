

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <a href="index.html" class="navbar-brand d-flex align-items-center mb-2" href="index.html">
                        <img src="{{ asset('images/3.PNG') }}" alt="Image Description" width="120px">

                    </a>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Tabrbour, Amman, Jordan</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+962 790 751376</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>rocompany18@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://web.facebook.com/shatha.rababah.7/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.instagram.com/Shatharababah/?fbclid=IwAR1ZE7Xkx7Y7eLcZ2K1rrgtP9hsOvTRtTNdBQzHhqhn4RJNqdg4eGSU5OZY"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-2" href="https://www.linkedin.com/in/shatha-rababah/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">About</h4>
                    <a class="btn btn-link" href="https://www.epa.gov/recycle/how-do-i-recycle-common-recyclables">How I can recycle</a>
                    <a class="btn btn-link" href="{{ route('form') }}">To be recycler now</a>
                    @if (Auth::check())
                    <a class="btn btn-link" href="{{ route('profile.general') }}">My account</a>
                    @else
                    <a class="btn btn-link" href="/login">My account</a>
                     @endif
                    <a class="btn btn-link" href="#courses">Courses</a>
  
                    
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="#Services">Our Services</a>

                    <a class="btn btn-link" href="{{ route('contact') }}">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>"Subscribe for updates, offers, and exciting news. Join now!"</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-light border-light w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">PRO Company</a>, All Right Reserved.
                </div>
               
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js" integrity="sha512-7VTiy9AhpazBeKQAlhaLRUk+kAMAb8oczljuyJHPsVPWox/QIXDFOnT9DUk1UC8EbnHKRdQowT7sOBe7LAjajQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
    
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>.
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        {{-- <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script> --}}

    <!-- JavaScript Libraries -->


    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js')}}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
$(document).ready(function () {
    $('#carouselExample3Controls').carousel();

    // Initialize the rating based on the hidden input value
    var initialRating = $("#rating-input").val();
    $(".rating i").each(function () {
        if ($(this).data("rating") <= initialRating) {
            $(this).addClass("selected");
        }
    });

    // Add event listeners to handle star rating selection
    const stars = document.querySelectorAll(".rating i");
    const ratingInput = document.getElementById("rating-input");

    stars.forEach((star) => {
        star.addEventListener("click", function () {
            const rating = parseInt(star.getAttribute("data-rating"));

            // Highlight the selected star and stars to the left
            stars.forEach((s) => {
                if (parseInt(s.getAttribute("data-rating")) <= rating) {
                    s.classList.add("selected");
                } else {
                    s.classList.remove("selected");
                }
            });

            ratingInput.value = rating;
        });
    });
       $("#incrementButton, #decrementButton").click(function () {
            var action = $(this).data("action");
            $("#actionInput").val(action);
            // Trigger the form submission
            $(this).closest("form").submit();
        });



});


  
</script>


      
</body>

</html>