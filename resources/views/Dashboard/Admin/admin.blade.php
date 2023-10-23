@extends('Dashboard.Master')

@section('title')
Category
@endsection

<link href="{{ asset('css-dash/produc.css') }}" rel="stylesheet">

@section('content')



<div class="container " style="margin-top: 100px;">
  <div class="table-wrap">

    @if(Session::has('deleted'))
                            <script>
        Swal.fire("Message", "{{ Session::get('deleted') }}", 'warning', {
        showConfirmButton: true,
        confirmButtonText: "OK",
    });
</script>
                        
            
                            @elseif(Session::has('success'))
 <script>
    Swal.fire("Message", "{{ Session::get('success') }}", 'success', {
        showConfirmButton: true,
        confirmButtonText: "OK",
    });
</script>

@elseif(session('cancel'))

        <script>
            // Display a SweetAlert message
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('cancel') }}',
            });
        </script>

                        @endif

      <div class="d-flex justify-content-end ">
          <a href="{{route('admin.create')}}"  class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
      </div>
      <div class="table-responsive" style="overflow-x: auto;">
      <table class="table table-responsive table-borderless">
          <thead>

              <th >&nbsp;</th>
              <th>#</th>
              <th>Image</th>
              <th>Username</th>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Birthday</th>
     
              <th>Action</th>
           
            

          </thead>
          <tbody>
            @foreach ($users as  $user)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $user->id}}</td>
                  <td>
                      <img class="pic"
                      src="/images/{{ $user->Image }}" alt="">
                  </td>
                
            
                   <td class="d- text-muted">
                  {{ $user->name}}
                </td>
                  <td class="d- text-muted">
                    {{ $user->Firstname}}
                  
                  <td class="d- text-muted">
                    {{ $user->Lastname}}
                  </td>
                  <td class="d- text-muted">
                    {{ $user->email}}
                  </td>
                  <td class="d- text-muted">
                    {{ $user->Phone}}
                  </td>
                  <td class="d- text-muted">
                    {{ $user->Birthday}}
                  </td>
             
                 

                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto;">

                        <form  method="POST" action="{{ route('user_admin.destroy', $user->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit" ><i class="bi-trash"></i> </button>
                            </form>
                          </div>
                        </form>
                  </td>
              </tr>
         
              @endforeach
            
          
          </tbody>
      </table>
     
  </div>
</div>
</div>














@endsection