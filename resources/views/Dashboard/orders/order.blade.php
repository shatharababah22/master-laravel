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
              {{-- <th>#</th> --}}
              <th>Email-user</th>
              <th># Items</th>
              <th>Payment Method</th>
              <th>Order Date</th>
              <th>Total Amount</th>
              <th>Action</th>
           
             
    
              
          </thead>
          <tbody>
            @foreach ($orders as  $order)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  {{-- <td >{{ $order->id}}</td> --}}
                
                  <td class="d- text-muted">
                    {{$order->email}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->items_count}}
                  </td> 
                  <td class="d- text-muted">
                    {{ $order->PaymentType}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->OrderDate}}
                  </td>
                  <td class="d- text-muted">
                    {{ $order->TotalAmount}}
                  </td>
                               
                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto 50px;">
                      <button type="button" class="btn btn-success btnedit order-details" data-order-id="{{ $order->id }}"><i class="bi bi-eye"></i></button>

                        {{-- <button type="button" class="btn btn-success  btnedit"><a href="{{ route('order.edit',$order->id) }}" ><i class="bi-pencil-square"></i></a> </button> 
                       

                        <form id="delete-form-{{ $order->id }}" method="POST" action="{{ route('order.destroy', $order->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit"  data-delete-id="{{ $order->id }}"><i class="bi-trash"></i> </button>
                            </form>
                          </div>
                        </form> --}}
                  </td>
              </tr>
              <tr class="order-items-row" id="order-items-{{$order->id}}" style="display: none;">
                <td colspan="4">
                    <table class="styled-table" style="width: 100%">
                        <thead>
                            <tr>
                          
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($order->orderItems ?? [] as $orderItem)
                
                          <tr>
                            <td>
                            
                              <img src="{{ asset('images/' . $orderItem->product->image1) }}" alt="Product Image" width="150px" height="120px">
                      
                            </td>
                            <td>{{ $orderItem->product->Name }}</td>
                            <td>{{ $orderItem->Quantity }}</td>
                            <td>{{ $orderItem->Subtotal }}</td>
                        </tr>
                      @endforeach
                      
                        </tbody>
                    </table>
                </td>
            </tr>
              @endforeach
            
          
          </tbody>
      </table>
     
  </div>
</div>










<script>
document.addEventListener("DOMContentLoaded", function () {
    var orderDetails = document.querySelectorAll(".order-details");

    orderDetails.forEach(function (element) {
        element.addEventListener("click", function () {
            var orderId = this.getAttribute("data-order-id");
            var orderItemsRow = document.getElementById("order-items-" + orderId);

            // Toggle the visibility of the order items row for the corresponding order
            if (orderItemsRow.style.display === "none" || orderItemsRow.style.display === "") {
                orderItemsRow.style.display = "table-row";
            } else {
                orderItemsRow.style.display = "none";
            }
        });
    });
});

</script>




@endsection