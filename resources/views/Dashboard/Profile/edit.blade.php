@extends('Dashboard.Master')

@section('title')
Category
@endsection


@section('content')




<div class="d-flex justify-content-center align-items-center">

<div class="main crud">
<section class="signup">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('adminprofile.update',$dataadmin->id)}}" enctype="multipart/form-data"  id="signup-form"  class="signup-form">
                @method('PUT')
               @csrf
                <h2 class="form-title mb-3" >Edit Your information</h2>
          
        <div class="form-floating mb-3 ">
            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}

            <input class="form-control inputadmin" id="name" name="name" value="{{$dataadmin->name}}" type="text" placeholder="Name" data-sb-validations="required" />

            <label for="name">Name</label>

            
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Firstname" name="Firstname" value="{{$dataadmin->Firstname}}" type="text" placeholder="Firstname" data-sb-validations="required" />
            <label for="Firstname">Firstname</label>
        
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Lastname" name="Lastname" value="{{$dataadmin->Lastname}}" type="text" placeholder="Lastname" data-sb-validations="required" />
            <label for="Lastname">Lastname</label>
        
        </div>

        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Phone" name="Phone" value="{{$dataadmin->Phone}}" type="text" placeholder="Phone" data-sb-validations="required" />
            <label for="Phone">Phone</label>
        
        </div>

        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Birthday" name="Birthday" value="{{$dataadmin->Birthday}}" type="text" placeholder="Birthday" data-sb-validations="required" />
            <label for="Birthday">Birthday</label>
        
        </div>
   
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="email" name="email" value="{{$dataadmin->email}}" type="text" placeholder="Email" data-sb-validations="required" />
            <label for="email">Email</label>
        
        </div>
        <div class=" mb-3 ">
            <input class="form-control inputadmin" name="Image" value='{{ old('Image') }}' type="file"  data-sb-validations="required" />
            <img src="/images/{{ $dataadmin->Image }}" width="200px" class="mt-4">  
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" name="submit" class="btn btn-success btn-rounded" data-mdb-ripple-color="#ffffff">Submit</button>
          </div>
             
        </form>
</div>
</div>
</section>
</div>


@endsection