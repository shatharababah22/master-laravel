@extends('layouts.Master')
@section('title', 'PRO')
@section('content')

<style>

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}




/* table */

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color:darkgreen;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #1c690c;
}
    </style>


 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 mb-4 animated slideInDown header">Profile Page</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Profile</a></li>
                
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="container">
    <div class="main-body">
    

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="/images/{{ Auth::user()->Image }}" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>{{ Auth::user()->name }}</h4>
        
                      <p class="text-muted font-size-sm">{{ Auth::user()->email }}</p>
                      {{-- <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button> --}}
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                    <ul class="list-group list-group-flush rounded-3" >
                        <li class="list-group-item d-flex align-items-center p-3">
                            <i class="fas fa-user fa-lg  me-3" style="color: green;"></i>
                           <a href="{{ route('profile.edit') }}"> <p class="mb-0"><b>Profile Information</b></p>  </a>
                          </li>
                      <li class="list-group-item d-flex  align-items-center p-3">
                        <a href="{{ route('cart') }}">    <i class="fas fa-bell fa-lg me-3" style="color: green;"></i></a>
                      <p class="mb-0">Your cart</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center  p-3">
                        <i class="fas fa-cogs fa-md me-3" style="color: green;"></i>

                        <p class="mb-0">Your order</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-heart fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">Wishlist</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-history fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">History</p>
                      </li>
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-map-marker-alt fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">Track Your Order</p>
                      </li> 
                      <li class="list-group-item d-flex align-items-center align-items-center p-3">
                        <i class="fas fa-undo fa-lg me-3" style="color: green;"></i>

                        <p class="mb-0">Returns and Refunds</p>
                      </li>
                    </ul>
                  </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->name }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->email }}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ Auth::user()->Phone }}
                    </div>
                  </div>
                
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <select id="addressSelect" class="form-select form-select-md w-50" name="UserID">
                                          <option value="">Select an address</option>
                                        
                                          @if(isset($addresses))
                                              @foreach($addresses as $address)
                                                  <option value="{{ $address->id }}">{{ $address->city }}</option>
                                              @endforeach
                                          @endif
                                      </select>
                        
                          
                    </div>
                  </div>
                  
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-primary" target="__blank" href="{{ route('profile.edit') }}">Edit</a>
                    </div>
                  </div>
                </div>
              </div>
             <h4>Recyclings Table</h4>
              <div class="row gutters-sm">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Types</th>
                            <th>Quantity (In kileo)</th>
                            <th>Max Quantity (In kileo) <small>To get 30%</small></th>
                            <th>Max Quantity (In kileo) <small>To get 50%</small></th>
                            <th>Max Quantity (In kileo) <small>To get 80%</small></th>
                        </tr>
                    </thead>
                    <tbody>
                 @foreach($Recyclings as $item)
                 <tr class="active-row">
                    <td>{{$item->types}}</td>
                    <td>{{$item->Amount}}</td>
                </tr>
                 @endforeach
                       
              
                    </tbody>
                </table>
              </div>
              <h4>Order Table</h4>
              <div class="row gutters-sm">
                <table class="styled-table">
                    <thead>
                        <tr>
                            <th>Types</th>
                            <th>Quantity (In kileo)</th>
                            <th>Max Quantity (In kileo) <small>To get 30%</small></th>
                            <th>Max Quantity (In kileo) <small>To get 50%</small></th>
                            <th>Max Quantity (In kileo) <small>To get 80%</small></th>
                        </tr>
                    </thead>
                    <tbody>
                 @foreach($Recyclings as $item)
                 <tr class="active-row">
                    <td>{{$item->types}}</td>
                    <td>{{$item->Amount}}</td>
                </tr>
                 @endforeach
                       
              
                    </tbody>
                </table>
              </div>



            </div>
          </div>

        </div>
    </div>










@endsection