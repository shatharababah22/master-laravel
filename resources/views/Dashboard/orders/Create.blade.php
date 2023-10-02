{{-- @extends('Dashboard.Master')

@section('title')
Order
@endsection


@section('content')


<div class="d-flex justify-content-center align-items-center">

    <div class="main crud">
<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('order.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('post')
                <h2 class="form-title mb-3" >Add Order</h2>
        <div class="form-floating mb-3 ">

            <input class="form-control inputadmin " id="name" name="Email" value='{{ old('Email') }}' type="text" placeholder="Email" data-sb-validations="required" />

            <label for="name">Email</label>

            
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="address1" value='{{ old('address1') }}' type="text" placeholder="address1" data-sb-validations="required" />
            <label for="decription">Address</label>
        
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="OrderDate" value='{{ old('OrderDate') }}' type="text" placeholder="Order Date" data-sb-validations="required" />
            <label for="decription">Order Date</label>
        
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="TotalAmount" value='{{ old('TotalAmount') }}' type="text" placeholder="TotalAmount" data-sb-validations="required" />
            <label for="decription">Total Amount</label>
        
        </div>
            
        <div class="form-group row mb-3">
            <div class="col-md-6">
                <select class="form-control inputadd" name="status" data-sb-validations="required">
                    <option value="">Select the status</option>
                    <option value="Option 1" {{ old('MADEFROM') == 'Option 1' ? 'selected' : '' }}>0</option>
                    <option value="Option 2" {{ old('MADEFROM') == 'Option 2' ? 'selected' : '' }}>1</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="form-control inputadd" name="CategoryID" data-sb-validations="required">
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->Name }}</option>
                 
                @endforeach
                </select>
            </div>


        </div>

        <div class="form-floating mb-1 ">
            <select class="form-control inputadd" name="Status" data-sb-validations="required">
                <option>Select the status</option>
                <option>0</option>
                <option>1</option>
            </select>
        
        </div>
    
        <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-success btn-rounded" data-mdb-ripple-color="#ffffff">Add<i class="fas fa-add ms-1"></i></button>
          </div>
             
        </form>
</div>
</div>
</section>
</div>






</div>
























@endsection --}}