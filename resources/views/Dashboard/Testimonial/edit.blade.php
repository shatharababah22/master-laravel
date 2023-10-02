@extends('Dashboard.Master')

@section('title')
Testimonial
@endsection


@section('content')




<div class="d-flex justify-content-center align-items-center">

<div class="main crud">
<section class="signup">
    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('test.update',$test->id)}}" enctype="multipart/form-data"  id="signup-form"  class="signup-form">
                @method('PUT')
               @csrf
                <h2 class="form-title mb-3" >Edit Testimonial</h2>
                {{-- <div class="form-floating mb-3 ">
                    <input class="form-control inputadmin" id="decription" name="id" type="text" placeholder="Decription" data-sb-validations="required" />
                    <label for="decription">ID</label>
                
                </div> --}}
        <div class="form-floating mb-3 ">
            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}

            <input class="form-control inputadmin " id="name" name="Name" value="{{ $test->Name }}" type="text" placeholder="Name" data-sb-validations="required" />

            <label for="name">Name</label>

            
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Comment" name="comments" value="{{ $test->comments }}" type="text" placeholder="Decription" data-sb-validations="required" />
            <label for="Comment">Comment</label>
        
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Comment" name="Major" value="{{ $test->Major }}" type="text" placeholder="Decription" data-sb-validations="required" />
            <label for="Comment">Major</label>
        
        </div>
        <div class=" mb-3 ">
            <input class="form-control inputadmin" name="Image" value='{{ old('Image') }}' type="file"  data-sb-validations="required" />
            <img src="/images/{{ $test->Image }}" width="200px" class="mt-4">

            <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
  
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