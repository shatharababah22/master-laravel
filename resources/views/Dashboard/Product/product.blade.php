@extends('Dashboard.Master')

@section('title')
Category
@endsection
<link href="{{ asset('css-dash/produc.css') }}" rel="stylesheet">

@section('content')



<div class="container " style="margin-top: 100px;width:100%;">
  <div class="table-wrap">
    <script>
      @if(Session::has('deleted'))
      Swal.fire("Message", "{{ Session::get('deleted') }}", 'success', {
          showConfirmButton: true,
          confirmButtonText: "OK",
      });
      @endif
  </script>
  @if(Session::has('success'))
   <script>
      Swal.fire("Message", "{{ Session::get('success') }}", 'success', {
          showConfirmButton: true,
          confirmButtonText: "OK",
      });
  </script>
      @endif

      <div class="d-flex justify-content-end ">
          <a href="{{route('productadmin.create')}}"  class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
      </div>
      <div class="table-responsive" style="overflow-x: auto;">
      <table class="table table-responsive table-borderless" style="width: 100%;">
          <thead>
              <th >&nbsp;</th>
              <th >#</th>
              <th>Images</th>
              <th>Name</th>
              <th>Description</th>
              <th>Price</th>
              <th>Stockquantity</th>
              <th>Made_from</th>
              <th>Brand</th>
              <th>Item_id</th>
              <th>NOTES</th>
              <th>status </th>
            
              <th>Action</th>
           
            
          </thead>
          <tbody>
            @foreach ($products as  $product)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $product->id}}</td>
                  <td >
                      <img class="pic"
                      src="{{ asset('images/' . $product->image1) }}" alt="">
                      <img class="pic"
                      src="{{ asset('images/' . $product->image2) }}" alt="">
                      <img class="pic"
                      src="{{ asset('images/' . $product->image3) }}" alt="">
                      <img class="pic"
                      src="{{ asset('images/' . $product->image4) }}" alt="">
                      <img class="pic"
                      src="{{ asset('images/' . $product->image5) }}" alt="">
                  </td>
                  <td>
                      <div>
                          
                          <p class="m-0 fw-bold text-muted">{{ $product->Name}} </p>
                      </div>
                  </td>
                
                  <td class="d- text-muted" >
                    {{ $product->description}}
                  </td>
                  <td class="d- text-muted">
                    {{ $product->Price}}
                  </td>
                  <td class="d- text-muted">
                    {{ $product->Stockquantity}}
                  </td>
                  <td class="d- text-muted">
                    {{ $product->MADEFROM}}
                  </td>
                  <td class="d- text-muted">
                    {{ $product->Brand}}
                  </td>
                  <td class="d- text-muted">
                    {{ $product->ItemId}}
                  </td>
                  <td class="d- text-muted">
                    {{ $product->NOTES}}	
                  </td>
                  <td class="d- text-muted">
                    {{ $product->status}}	
                  </td>                
                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto;">
                        <button type="button" class="btn btn-success  btnedit"><a href="{{ route('productadmin.edit',$product->id) }}" ><i class="bi-pencil-square"></i></a> </button>                        

                        <form  id="delete-form-{{ $product->id }}" method="POST" action="{{ route('productadmin.destroy', $product->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit"  data-delete-id="{{ $product->id }}"><i class="bi-trash"></i> </button>
                            </form>
                        
                        </form>
                          </div>
                  </td>
              </tr>
         
              @endforeach
            
          
          </tbody>
      </table>
     
  </div>
</div>
</div>














@endsection