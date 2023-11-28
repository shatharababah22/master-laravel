@extends('layouts.Master')
@section('title', 'Profit')
@section('content')






    <!-- Page Header Start -->
    <div class="container-fluid page-header ml-2 py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class=" col-lg-5 justify-content-end py-5 ">
            <h1 class="display-3 animated slideInDown header" style="color: rgb(15,66,41);">
                <b>PRO</b><small style="font-size: 70%;">fit</small> and <b>PRO</b><small style="font-size: 70%;">tect</small> 
              </h1>
              
           <h5 class="m-3">"Contribute to sustainability by entrusting us with your waste materials like paper and bottles.
             Our company specializes in crafting unique items from recyclables, allowing you to profit both financially and environmentally.
             Together, we create a greener future while generating value from discarded resources."</h5>
        </div>
    </div>
    <!-- Page Header End -->






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


    <!--profit Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center mt-3">
                <img src="./images/image (45).png" class="mt-3">
                <div class="btn-group mt-5" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn switch-form" data-form="organic" style="background-color: rgb(149,141,135); color: aliceblue;">Click here</button>
                    <button type="button" class="btn switch-form" data-form="plastic" style="background-color:rgb(253,214,71); color: aliceblue;">Click here</button>
                    <button type="button" class="btn switch-form" data-form="glass" style="background-color: rgb(83,158,77); color: aliceblue;">Click here</button>
                    <button type="button" class="btn switch-form" data-form="paper" style="background-color: rgb(52,105,185); color: aliceblue;">Click here</button>
                </div>  
            </div>
        </div>
    </div>
    <!--profit End -->
    
    <div class="container text-center" id="forms">
        
        <form>
            
        </form>
    </div>



    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="fs-5 fw-bold text-primary">PRO</p>
        <h1 class="display-5 mb-5">
            Recycling Pickup Points </h1>
    </div>
  
    <h2 class="m-4">Boulevard</h2><div id="map1" style="height: 400px;"></div><br>
    <h2 class="m-4">Carrefour Mall</h2><div id="map2" style="height: 400px;"></div><br>
    <h2 class="m-4">Irbid Mall</h2><div id="map3" style="height: 400px;"></div><br>
    <h2 class="m-4">Abdali Mall</h2><div id="map4" style="height: 400px;"></div><br>

    </div>

    
  









  



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const formsContainer = document.getElementById("forms");
            const buttons = document.querySelectorAll(".switch-form");
            
            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    const formId = this.getAttribute("data-form");
                    const formHTML = getFormHTML(formId);
                    
                    formsContainer.innerHTML = formHTML;
                });
            });

            


            formtext1=  `
                            <h2>Organic Form</h2>
                            <form class="custom-form">
            <div class="mb-3">
                
                <input type="text" class="form-control " id="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3">
         
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
          
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
        
                <select class="form-select" id="kiloAmount" required>
                    <option value="" selected>Select an amount</option>
                    <option value="1">1 kilo</option>
                    <option value="2">2 kilos</option>
                    <option value="5">5 kilos</option>
                    <option value="10">10 kilos</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                        `;
         
            function getFormHTML(formId) {
                let formHTML = '';
                
                switch (formId) {
                    case 'organic':
                   formHTML=`<h2>Organic Form</h2>
                   <form class="custom-form">
            <div class="mb-3">
                
                <input type="text" class="form-control " id="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3">
         
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
          
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
    
    <input type="text" class="form-control" id="lastName" placeholder="Enter your location" required>
</div> 
<div class="mb-3">
                    <label for="amount" class="form-label">Amount in Kilos</label>
                    <input type="number" class="form-control" id="amount" placeholder="Enter the amount in kilos" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>`  
                        break;
                    case 'plastic':
                        formHTML = `
                            <h2>Plastic Form</h2>
                            <form class="custom-form">
            <div class="mb-3">
                
                <input type="text" class="form-control " id="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3">
         
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
          
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
    
    <input type="text" class="form-control" id="lastName" placeholder="Enter your location" required>
</div> 
<div class="mb-3">
                    <label for="amount" class="form-label">Amount in Kilos</label>
                    <input type="number" class="form-control" id="amount" placeholder="Enter the amount in kilos" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                        `;
                        break;
                    case 'glass':
                        formHTML = `
                            <h2>Glass Form</h2>
                            <form class="custom-form">
            <div class="mb-3">
                
                <input type="text" class="form-control " id="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3">
         
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
          
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
    
    <input type="text" class="form-control" id="lastName" placeholder="Enter your location" required>
</div> 
<div class="mb-3">
                    <label for="amount" class="form-label">Amount in Kilos</label>
                    <input type="number" class="form-control" id="amount" placeholder="Enter the amount in kilos" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                        `;
                        break;
                    case 'paper':
                        formHTML = `
                            <h2>Paper Form</h2>
                            <form class="custom-form">
            <div class="mb-3">
                
                <input type="text" class="form-control " id="firstName" placeholder="Enter your first name" required>
            </div>
            <div class="mb-3">
    
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last name" required>
            </div>
            <div class="mb-3">
         
                <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
          
                <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="mb-3">
    
    <input type="text" class="form-control" id="lastName" placeholder="Enter your location" required>
</div> 
<div class="mb-3">
                    <label for="amount" class="form-label">Amount in Kilos</label>
                    <input type="number" class="form-control" id="amount" placeholder="Enter the amount in kilos" required>
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
                        `;
                        break;
                    default:
                        formHTML = '';
                }
                
                return formHTML;
            }

    });


</script>




{{-- 
<script>
    document.addEventListener('DOMContentLoaded', function () {
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Data Saved Successfully',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000 // Adjust the timer as needed
            });
        @elseif(session('message'))
            Swal.fire({
                icon: 'error',
                title: 'Login Required',
                text: '{{ session('message') }}',
                showConfirmButton: false,
                timer: 3000 // Adjust the timer as needed
            });
        @endif
    });
</script> --}}

<script>
   const locationsJordan = [
  { lat: 31.9515, lng: 35.9235 }, // Amman
  { lat: 32.5498, lng: 35.8474 }, // Irbid
  { lat: 30.5852, lng: 36.2384 }, // Aqaba
  { lat: 32.3330, lng: 36.0218 }  // Zarqa
];

locationsJordan.forEach((location, index) => {
  const map = L.map(`map${index + 1}`).setView(location, 10);
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);
  L.marker(location).addTo(map);
});

  </script>




        


















@endsection