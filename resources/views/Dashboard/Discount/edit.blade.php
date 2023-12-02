@extends('Dashboard.Master')

@section('title')
Discount
@endsection


@section('content')


<div class="d-flex justify-content-center align-items-center">

    <div class="main crud">
<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('discount.update', $discount->id )}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('PUT')
                <h2 class="form-title mb-3" >Edit Discount</h2>
                {{-- <div class="form-floating mb-3 ">
                    <input class="form-control inputadmin" id="decription" name="id" type="text" placeholder="Decription" data-sb-validations="required" />
                    <label for="decription">ID</label>
                
                </div> --}}
        <div class="form-floating mb-3 ">						

            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}

            <input class="form-control inputadmin " id="name" name="Kiloes" value="{{$discount->Kiloes }}" type="text" placeholder="Kiloes" data-sb-validations="required" />

            <label for="name">Kiloes</label>

            
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Percent" name="percent" value="{{$discount->percent }}" type="text" placeholder="Percent" data-sb-validations="required" />
            <label for="Percent">Percent</label>
        
        </div>
        
        {{-- <div class="form-group row mb-3">
            <div class="col-md-6">
                <input class="form-control inputadd" id="decription" name="StartDate" value="{{$discount->StartDate }}" type="date" placeholder="Start Date" data-sb-validations="required" />
            
            </div>
            
            <!-- Add another input field here -->
            <div class="col-md-6">
                <input class="form-control inputadd" name="EndDate" value="{{$discount->EndDate}}" type="date" placeholder="End Date" data-sb-validations="required" />
           
            </div>
        </div> --}}
        {{-- <div class="form-floating mb-1 ">
            <select class="form-control inputadd" name="active" value="{{$discount->active}}" data-sb-validations="required">
                <option>Select the status</option>
                <option>0</option>
                <option>1</option>
            </select>
        
        </div> --}}

    
        <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-success btn-rounded" data-mdb-ripple-color="#ffffff">Edit<i class="fas fa-add ms-1"></i></button>
          </div>
             
        </form>
</div>
</div>
</section>
</div>






</div>
























@endsection