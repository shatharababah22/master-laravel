@extends('Dashboard.Master')

@section('title')
Category
@endsection


@section('content')


<div class="d-flex justify-content-center align-items-center mb-4">

    <div class="main crud">
<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('productadmin.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('post')
                <h2 class="form-title mb-3" >Add Product</h2>
            

        <div class="form-floating mb-3 ">

            <input class="form-control inputadmin " id="name" name="Name" value='{{ old('Name') }}' type="text" placeholder="Name" data-sb-validations="required" />

            <label for="name">Name</label>
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="description" value='{{ old('description') }}' type="text" placeholder="Decription" data-sb-validations="required" />
            <label for="decription">Decription</label>
        
        </div>
        
        <div class="form-group row mb-3">
            <div class="col-md-4">
                <input class="form-control inputadd" id="Stockquantity" name="Stockquantity" value='{{ old('Stockquantity') }}' type="number" placeholder="Stock quantity" data-sb-validations="required" />
            </div>
            
            <!-- Add another input field here -->
            <div class="col-md-4">
                <input class="form-control inputadd" name="ItemId" value='{{ old('ItemId') }}' type="number" placeholder="Item Id" data-sb-validations="required" />
           
            </div>
            <div class="col-md-4">
                <input class="form-control inputadd" name="Price" value='{{ old('Price') }}' type="number" placeholder="Price" data-sb-validations="required" />
           
            </div>
        </div>

    

        <div class="form-group row mb-3">
            <div class="col-md-6">
                <input class="form-control inputadd" id="decription" name="MADEFROM" value='{{ old('MADEFROM') }}' type="text" placeholder="Made from" data-sb-validations="required" />
            
            </div>

            <div class="col-md-6">
                <select class="form-control inputadd" name="CategoryID" data-sb-validations="required">
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->Name }}</option>
                 
                @endforeach
                </select>
            </div>
            
            <!-- Add another input field here -->
        
        </div>
        

        


        <div id="fileInputsContainer">
            <div>
                <input class="form-control inputadmin" name="image1" value="{{ old('image1') }}" type="file" data-sb-validations="required" />
            </div>
        </div>

        <div id="fileInputsContainer" class="mt-2">
            <div>
                <input class="form-control inputadmin" name="image2" value="{{ old('image2') }}" type="file" data-sb-validations="required" />
            </div>
        </div>

  
        
        

        
        <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-success btn-rounded mt-1 " data-mdb-ripple-color="#ffffff">Add<i class="fas fa-add ms-1"></i></button>
          </div>
             
        </form>
</div>
</div>
</section>
</div>






</div>



{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let fileInputCount = 1; // Initial file input count

    $('#addFileInput').click(function() {
        fileInputCount++;

        // Create a new file input field
        const newFileInput = $('<div><input class="form-control inputadmin mt-3" name="image' + fileInputCount + '" type="file" data-sb-validations="required" /></div>');

        // Append the new file input field to the container
        $('#fileInputsContainer').append(newFileInput);
    });
});
</script> --}}





















@endsection