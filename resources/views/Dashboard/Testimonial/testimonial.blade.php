@extends('Dashboard.Master')

@section('title')
Testimonial
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
          <a href="{{route('test.create')}}"  class="btn text-white py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block" style="background-color:rgba(16, 133, 16, 0.578) ; border-radius: 10px;">Add<i class="fa fa-plus  ms-2" ></i></a>
      </div>
      <div class="table-responsive" style="overflow-x: auto;">
      <table class="table table-responsive table-borderless">
          <thead>
              <th >&nbsp;</th>
              <th>#</th>
              <th>Image</th>
              <th>Name</th>
              <th>Comment</th>
              <th>Major</th>
              <th>Action</th>              
          </thead>
          <tbody>
            @foreach ($testimonials as  $testimonial)
              <tr class="align-middle alert border-bottom" role="alert">
                  <td>
                      <input type="checkbox" id="check" style="border: 1px solid black">
                  </td>
                  <td >{{ $testimonial->id}}</td>
                  <td >
                    <img class="pic"
                    src="/images/{{ $testimonial->Image }}" alt="">
                </td>
                  <td>
                      <div>
                          
                          <p class="m-0 fw-bold text-muted">{{$testimonial->Name}} </p>
                      </div>
                  </td>
                
                  <td > <div class="causes-text read-more-container">
                    {{-- <h3>{{ $product->shortname }}</h3> --}}
                    <div class="causes-text read-more-container" style="width: 380px;">
                        {{ $testimonial->truncated_description }}<span class="read-more-text">{{ $testimonial->showmore_description }}</span>
          
                    <span class="read-more-btn">Read More...</span>
                </div>
                </div></td>
                  <td >{{ $testimonial->Major}}</td>
           
                 
                  <td>
                    <div style="display: grid; grid-template-columns: 50px auto;">
                        <button type="button" class="btn btn-success  btnedit"><a href="{{ route('test.edit',$testimonial->id) }}" ><i class="bi-pencil-square"></i></a> </button>                        

                        <form id="delete-form-{{ $testimonial->id }}" method="POST" action="{{ route('test.destroy', $testimonial->id) }}">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btnedit"  data-delete-id="{{ $testimonial->id }}"><i class="bi-trash"></i> </button>
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