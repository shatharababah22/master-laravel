@extends('layouts.Master')
@section('title', 'PRO')
@section('content')


<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>




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














    <!--profit Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center mt-3">
                <img src="./images/image (45).png" class="mt-3">
                <div class="btn-group mt-5" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn switch-form"  data-form="recycled-items" style="background-color: rgb(149,141,135); color: aliceblue;">Click here</button>
                    <button type="button" class="btn switch-form" data-form="recycled-items" style="background-color:rgb(253,214,71); color: aliceblue;">Click here</button>
                    <button type="button" class="btn switch-form" data-form="recycled-items" style="background-color: rgb(83,158,77); color: aliceblue;">Click here</button>
                    <button type="button" class="btn switch-form" data-form="recycled-items" style="background-color: rgb(52,105,185); color: aliceblue;">Click here</button>
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
            
            function getFormHTML(formId) {
                let formHTML = '';
                
                if (formId === 'recycled-items') {
                    formHTML = `
                        <h2>Recycled Items Form</h2>
                        <form class="custom-form" method="post" action="{{ route('form_recycling') }}">
    @csrf

    <div class="mb-3">
        <label for="amount" class="form-label">Enter your number</label>
        <input type="tel" class="form-control" name="phone" required>
    </div>
    
    <div class="mb-3">
        <label for="types" class="form-label">Select Type</label>
        <select class="form-select" name="types" required>
            <option value="plastic">Plastic</option>
            <option value="organic">Organic</option>
            <option value="glass">Glass</option>
            <option value="paper">Paper</option>
        </select>
    </div>
    
    <div class="mb-3">
        <label for="amount" class="form-label">Amount in Kilos</label>
        <input type="number" class="form-control" name="Amount" required>
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    `;
                }
                
                return formHTML;
            }
        });
        </script>
        
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