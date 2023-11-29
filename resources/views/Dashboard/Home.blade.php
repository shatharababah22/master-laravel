@extends('Dashboard.Master')

@section('title')
Dashboard
@endsection


@section('content')

      <!-- Content Start -->



        <!-- Sale & Revenue Start -->
        <div class="container-fluid pt-4 px-4 ">
            <div class="row g-4 mt-4" >
                <div class="col-sm-6 col-xl-3">
                    <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                        <i class="fa fa-recycle fa-3x " style="color: #103e13e3;"></i>
                        <div class="ms-2">
                            <p class="mb-2">Recycled Items</p>
                            <h6 class="mb-0 text-dark">{{ $products }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                        <i class="fa fa-user fa-3x " style="color: #103e13e3;"></i>
                        <div class="ms-3">
                            <p class="mb-2">Customers</p>
                            <h6 class="mb-0 text-dark" >{{ $users }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                        <i class="fa fa-refresh fa-3x " style="color: #103e13e3;" ></i>
                        <div class="ms-3">
                            <p class="mb-2">Total recyclers</p>
                            <h6 class="mb-0 text-dark" >{{ $recycler }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class=" rounded d-flex align-items-center justify-content-between p-4" style="background-color: rgba(169, 169, 169,0.064);">
                        <i class="fa fa-shopping-cart fa-3x " style="color: #103e13e3;"></i>
                        <div class="ms-3">
                            <p class="mb-2">Total Orders</p>
                            <h6 class="mb-0 text-dark">{{ $allorders }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sale & Revenue End -->


        <!-- Sales Chart Start -->
        <div class="container-fluid pt-4 px-4 " >
            <div class="row g-1">
                <div class="col-sm-12 col-xl-12">
                    <div class=" text-center rounded p-4 ">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0 text-dark">Jordan Sales</h6>
                            <a href="" style="color: rgba(99, 151, 8, 0.8);">Show All</a>
                        </div>
                        <canvas id="worldwide-sales" </canvas>
                    </div>
                </div>
           
            </div>
        </div>
        <!-- Sales Chart End -->


        <!-- Recent Sales Start -->
       <div class="container-fluid pt-4 px-4">
            <div class=" text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0 text-dark">Recent Salse</h6>
                    {{-- <a style="color: darkolivegreen;">Show All</a> --}}
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                <th scope="col">Date</th>
                                <th scope="col">Email</th>
                                <th scope="col"># Items</th>
                                <th scope="col">Total amount</th>
                                <th scope="col">Payment Method</th>
                         
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as  $order)
                            <tr>
                                <td><input class="form-check-input" type="checkbox"></td>
                                <td> {{ $order->OrderDate }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->items_count}}</td>
                                <td>{{ $order->TotalAmount}}</td>
                                <td>{{ $order->PaymentType }}</td>
                              
                               
                            </tr>
                            @endforeach
                          
                     
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Recent Sales End -->


        <!-- Widgets Start -->
        <div class="container-fluid pt-4 px-4" style="margin-left: 18%">
            <div class="row g-4">
                {{-- <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100  rounded p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="mb-0 text-dark">Messages</h6>
                            <a href="" style="color: darkolivegreen;">Show All</a>
                        </div>
                        <div class="d-flex align-items-center  py-3">
                            <img class="rounded-circle flex-shrink-0" src="images/shatha.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0 text-dark">Shatha Rababah</h6>
                                    <small>20 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  py-3">
                            <img class="rounded-circle flex-shrink-0" src="images/sereen.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0 text-dark">Sereen Qamhieh</h6>
                                    <small>15 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  py-3">
                            <img class="rounded-circle flex-shrink-0" src="images/sohieb.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0 text-dark">Sohieb Rababah</h6>
                                    <small>40 minutes ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center  py-3">
                            <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0 text-dark">Jhon Doe</h6>
                                    <small>1 hour ago</small>
                                </div>
                                <span>Short message goes here...</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100  rounded p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0 text-dark">Calender</h6>
                            <a href="" style="color: darkolivegreen;">Show All</a>
                        </div>
                        <div id="calender"></div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-xl-4 " >
                    <div class="h-100  rounded p-4" style="background-color: rgba(169, 169, 169, 0.064);">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0 text-dark">To Do List</h6>
                            <a href="" style="color: darkolivegreen;">Show All</a>
                        </div>
                        <form method="post" action="{{ route('todos.store') }}">
                            @csrf
                            <div class="input-group">
                                <input name="todo1" class="form-control bg-transparent border-1 pt-1 " type="text" placeholder="Enter task">
                                <button type="submit" class="btn ms-1 mb-1" style="background-color:darkgreen; color: rgb(229, 230, 229); height:40px;">Add</button>
                            </div>
                        </form>
                        @if (is_array($todos) || is_object($todos))
                        @foreach($todos as $todo)
                        <div class="d-flex align-items-center border-bottom py-2">
                            <input class="form-check-input m-0 bg-transparent" type="checkbox" name="todo1">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 align-items-center justify-content-between">
                                    <span>{{ $todo }}</span>
                                    <form method="post" action="{{ route('todos.destroy', $todo) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif 
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Widgets End -->


        <!-- Footer Start -->
        <div class="container-fluid  pt-4 px-4">
            <div class=" rounded-top p-4" >
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-success text-sm-start">
                        &copy; <a href="#" class="text-dark">PRO company</a>, All Right Reserved. 
                    </div>
               
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Content End -->















@endsection


