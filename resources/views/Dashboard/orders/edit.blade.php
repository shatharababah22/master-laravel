@extends('Dashboard.Master')

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
            <form method="post" action="{{route('order.update', $order->id )}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('PUT')
                <h2 class="form-title mb-3" >Edit Order</h2>
                {{-- <div class="form-floating mb-3 ">
                    <input class="form-control inputadmin" id="decription" name="id" type="text" placeholder="Decription" data-sb-validations="required" />
                    <label for="decription">ID</label>
                
                </div> --}}
        <div class="form-floating mb-3 ">						

            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}

            <input class="form-control inputadmin " id="name" name="Email" value="{{$order->Email}}" type="email" placeholder="Name" data-sb-validations="required" />

            <label for="name">Name</label>

            
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Percent" name="address1" value="{{$order->address1}}" type="text" placeholder="Address" data-sb-validations="required" />
            <label for="Percent">Address</label>
        
        </div>
        
        <div class="form-group row mb-3">
            <div class="col-md-6">
                <input class="form-control inputadd" id="decription" name="OrderDate" value="{{$order->OrderDate}}" type="date" placeholder="Order Date" data-sb-validations="required" />
            
            </div>
            
            <!-- Add another input field here -->
            <div class="col-md-6">
                <input class="form-control inputadd" name="TotalAmount" value="{{$order->TotalAmount}}" type="text" placeholder="Total Amount" data-sb-validations="required" />
           
            </div>
        </div>
        <div class="form-floating mb-1 ">
            <select class="form-control inputadd" name="Status" value="{{$order->Status}}" data-sb-validations="required">
                <option>Select the status</option>
                <option>0</option>
                <option>1</option>
            </select>
        
        </div>

    
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