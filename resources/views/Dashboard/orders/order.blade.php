@extends('Dashboard.Master')

@section('title')
Orders
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

      {{-- <div class="d-flex justify-content-end ">
          <a href="{{route('order.create')}}"  class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
      </div> --}}
      <table class="table table-responsive table-borderless">
          <thead>
              <th >&nbsp;</th>
              <th>#</th>
              <th>Email-user</th>
              <th>Address</th>
              <th>Order Date</th>
              <th>Total Amount</th>
              <th>Status</th>
              <th>Action</th>
           
             
    
              
          </thead>
          <tbody>
            @foreach ($orders as  $order)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $order->id}}</td>
                
                  <td class="d- text-muted">
                    {{ $order->Email}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->address1}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->OrderDate}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->TotalAmount}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->Status}}
                  </td>                 
                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto 50px;">
                      <button type="button" class="btn btn-success  btnedit"><a href="{{ route('order.show',$order->Email) }}" ><i class="bi bi-eye"></i></a> </button>                        

                        <button type="button" class="btn btn-success  btnedit"><a href="{{ route('order.edit',$order->id) }}" ><i class="bi-pencil-square"></i></a> </button> 
                       

                        <form id="delete-form-{{ $order->id }}" method="POST" action="{{ route('order.destroy', $order->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit"  data-delete-id="{{ $order->id }}"><i class="bi-trash"></i> </button>
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