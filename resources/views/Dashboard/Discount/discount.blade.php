@extends('Dashboard.Master')

@section('title')
Discount
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
          <a href="{{route('discount.create')}}"  class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
      </div>
      <table class="table table-responsive table-borderless">
          <thead>
              <th >&nbsp;</th>
              <th>#</th>
              <th>Kileo</th>
              <th>Percent</th>
              <th>Action</th>
           
           

              
          </thead>
          <tbody>
            @foreach ($discounts as  $discount)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $discount->id}}</td>
                  <td>
                      <div>
                          
                          <p class="m-0 fw-bold text-muted">{{$discount->Kiloes}} </p>
                      </div>
                  </td>
                  <td >{{ $discount->percent}}</td>

                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto;">
                        <button type="button" class="btn btn-success  btnedit"><a href="{{ route('discount.edit',$discount->id) }}" ><i class="bi-pencil-square"></i></a> </button>                        

                        <form id="delete-form-{{ $discount->id }}" method="POST" action="{{ route('discount.destroy', $discount->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit"  data-delete-id="{{ $discount->id }}"><i class="bi-trash"></i> </button>
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