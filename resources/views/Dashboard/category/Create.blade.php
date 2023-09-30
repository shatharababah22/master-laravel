@extends('Dashboard.Master')

@section('title')
Category
@endsection


@section('content')


<div class="d-flex justify-content-center align-items-center">

    <div class="main crud">
<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('category.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('post')
                <h2 class="form-title mb-3" >Add category</h2>
                {{-- <div class="form-floating mb-3 ">
                    <input class="form-control inputadmin" id="decription" name="id" type="text" placeholder="Decription" data-sb-validations="required" />
                    <label for="decription">ID</label>
                
                </div> --}}
        <div class="form-floating mb-3 ">
            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}

            <input class="form-control inputadmin " id="name" name="Name" value='{{ old('Name') }}' type="text" placeholder="Name" data-sb-validations="required" />

            <label for="name">Name</label>

            
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="decription" value='{{ old('decription') }}' type="text" placeholder="Decription" data-sb-validations="required" />
            <label for="decription">Decription</label>
        
        </div>
        <div class=" mb-3 ">
            <input class="form-control inputadmin" name="Image" value='{{ old('Image') }}' type="file"  data-sb-validations="required" />
            <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
  
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
























@endsection