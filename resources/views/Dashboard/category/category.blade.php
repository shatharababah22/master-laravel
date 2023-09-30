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
          <a href="{{route('category.create')}}"  class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
      </div>
      <table class="table table-responsive table-borderless">
          <thead>
              <th >&nbsp;</th>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Description</th>
              <th>Action</th>
           
            
              
          </thead>
          <tbody>
            @foreach ($categories as  $category)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $category->id}}</td>
                  <td >
                      <img class="pic"
                      src="/images/{{ $category->Image }}" alt="">
                  </td>
                  <td>
                      <div>
                          
                          <p class="m-0 fw-bold text-muted">{{ $category->Name}} </p>
                      </div>
                  </td>
                
                  <td class="d- text-muted">
                    {{ $category->decription}}
                  </td>
                 
                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto;">
                        <button type="button" class="btn btn-success  btnedit"><a href="{{ route('category.edit',$category->id) }}" ><i class="bi-pencil-square"></i></a> </button>                        

                        <form id="delete-form-{{ $category->id }}" method="POST" action="{{ route('category.destroy', $category->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit"  data-delete-id="{{ $category->id }}"><i class="bi-trash"></i> </button>
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














@endsection