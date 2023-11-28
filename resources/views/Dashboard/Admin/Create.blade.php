@extends('Dashboard.Master')

@section('title')
Admin
@endsection


@section('content')


<div class="d-flex justify-content-center align-items-center">

    <div class="main crud">
<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->

    <div class="d-flex justify-content-center align-items-center" style="min-height: 50vh;">
        <div class="signup-content ">

            <div class="volunteer-form">
                @if ($errors->any())
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script>
                        document.addEventListener('DOMContentLoaded', function () {
                            var errorMessage = '';
                            @foreach ($errors->all() as $error)
                                errorMessage += '{{ $error }}\n'; // Use '\n' for line break
                            @endforeach
            
                            Swal.fire({
                                title: 'Validation Error',
                                text: errorMessage,
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        });
                    </script>
                @endif
            </div>

            <form method="post" action="{{route('admin.store')}}" enctype="multipart/form-data" id="signup-form" class="signup-form " >
                @csrf
                @method('post')
                <h2 class="form-title mb-3" >Add Admin</h2>
                {{-- <div class="form-floating mb-3 ">
                    <input class="form-control inputadmin" id="decription" name="id" type="text" placeholder="Decription" data-sb-validations="required" />
                    <label for="decription">ID</label>
                
                </div> --}}
        <div class="form-floating mb-3 ">
            {{-- <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br> --}}

            <input class="form-control inputadmin " id="name" name="name" value='{{ old('name') }}' type="text" placeholder="Name" data-sb-validations="required" />

            <label for="name">name</label>

            
        </div>
        <div class="form-group row mb-3">
            <div class="col-md-6">
                <input class="form-control inputadd" id="decription" name="Firstname" value='{{ old('Firstname') }}' type="text" placeholder="Firstname" data-sb-validations="required" />
            
            </div>
            
            <!-- Add another input field here -->
            <div class="col-md-6">
                <input class="form-control inputadd" name="Lastname" value='{{ old('Lastname') }}' type="text" placeholder="Lastname" data-sb-validations="required" />
           
            </div>
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="email" value='{{ old('email') }}' type="email" placeholder="Email" data-sb-validations="required" />
            <label for="decription">Email</label>
        
        </div>
        <div class="form-floating mb-3 ">
            <input class="form-control inputadmin" id="decription" name="password" value='{{ old('password') }}' type="password" placeholder="Password" data-sb-validations="required" />
            <label for="decription">Password</label>
        
        </div>
        <div class="form-group row mb-3">
            <div class="col-md-6">
                <input class="form-control inputadd" id="decription" name="Phone" value='{{ old('Phone') }}' type="number" placeholder="Phone" data-sb-validations="required" />
            
            </div>
            
            <!-- Add another input field here -->
            <div class="col-md-6">
                <input class="form-control inputadd" name="Birthday" value='{{ old('Birthday') }}' type="date" placeholder="Birthday" data-sb-validations="required" />
           
            </div>
        </div>
    
        <div>
            <input class="form-control inputadmin" name="Image" value='{{ old('Image') }}' type="file"  data-sb-validations="required" />
            {{-- <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br> --}}
  
        </div>
        <div class="d-flex justify-content-center mt-3">
            <button type="submit" name="submit" class="btn btn-success btn-rounded" data-mdb-ripple-color="#ffffff">Add<i class="fas fa-add ms-1"></i></button>
          </div>
             
        </form>
</div>
</div>
</section>
</div>






</div>
























@endsection