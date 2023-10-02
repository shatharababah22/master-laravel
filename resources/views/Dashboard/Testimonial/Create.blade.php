@extends('Dashboard.Master')

@section('title')
Testimonial
@endsection


@section('content')


<div class="d-flex justify-content-center align-items-center">

    <div class="main crud">
<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">
            <form method="post" action="{{route('test.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('post')
                <h2 class="form-title mb-3" >Add Testimonial</h2>
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
            <input class="form-control inputadmin" id="Comment" name="comments" value='{{ old('comments') }}' type="text" placeholder="Comment" data-sb-validations="required" />
            <label for="Comment">Comment</label>
        
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="Major" name="Major" value='{{ old('Major') }}' type="text" placeholder="Comment" data-sb-validations="required" />
            <label for="Major">Major</label>
        
        </div>
        {{-- <div class="form-floating mb-3 ">
            <select class="form-control inputadd" name="UserID" data-sb-validations="required">
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->Email }}</option>
             
            @endforeach
            </select>
        </div> --}}
        <div class=" mb-3 ">
            <input class="form-control inputadmin" name="Image" value='{{ old('Image') }}' type="file"  data-sb-validations="required" />
            {{-- <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br> --}}
  
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