@extends('Dashboard.Master')

@section('title')
Category
@endsection
<link href="{{ asset('css-dash/produc.css') }}" rel="stylesheet">
<style>
.read-more-container{

    display: flex;
    flex-direction: column;
    color: #111;

}

.read-more-btn{
    color: #066922;
}

.read-more-text{
    display: none;
}

.read-more-text--show{
    display: inline;
}
  </style>
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
              <th>Name</th>
              <th>Images1</th>
              <th>Images2</th>
          
              <th>Description</th>
              <th>Price</th>
              <th>Stockquantity</th>
              <th>Made_from</th>
      
              <th>Item_id</th>
         
            
              <th>Action</th>
           
            
          </thead>
          <tbody>
            @foreach ($products as  $product)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $product->id}}</td>
                  <td>
                  <div>
                          
                    <p class="m-0 fw-bold text-muted">{{ $product->Name}} </p>
                </div> </td>
                  <td >
                      <img class="pic"
                      src="{{ asset('images/' . $product->image1) }}" alt=""></td>
                      <td style=""><img class="pic"
                      src="{{ asset('images/' . $product->image2) }}" alt=""></td>
                      <td class="d- text-muted"> <!-- Adjust the width value as needed -->
                        <div class="causes-text read-more-container" style="width: 500px;">
                            {{-- <h3>{{ $product->shortname }}</h3> --}}
    
                                {{ $product->truncated_description }}<span class="read-more-text">{{ $product->showmore_description }}</span>
                      
                            <span class="read-more-btn">Read More...</span>
                        </div>
                    </td>
                    
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
                    {{ $product->ItemId}}
                  </td>
              
                                 
                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto;">
                        <button type="button" class="btn btn-success  btnedit"><a href="{{ route('productadmin.edit', $product->id) }}" ><i class="bi-pencil-square"></i></a> </button>                        

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










<script src= {{ asset("js/main.js") }} ></script>
<script src= {{ asset("showMore.min.js") }} ></script>

<script>
const readMoreButtons = document.querySelectorAll('.read-more-btn');

readMoreButtons.forEach(button => {
button.addEventListener('click', event => {
const current = event.target;
const currentText = current.parentNode.querySelector('.read-more-text');
currentText.classList.toggle('read-more-text--show');
current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";
});
});

</script>





@endsection