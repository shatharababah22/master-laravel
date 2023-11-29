@extends('Dashboard.Master')

@section('title')
Profile
@endsection


@section('content')




<section style="margin-top: 10%; width:70%; margin-left:17%; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-sm-5">
                <div class="card card-style1 border-0">
                    <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                        <div class="row align-items-center">
                            <div class="col-lg-5 mb-4 mb-lg-0">
                                <img src="/images/{{ $admin->Image }}" width="100%" height="100%" alt="...">
                            </div>
                            <div class="col-lg-7 px-xl-10">
                                <div class=" d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                    <h3 class= "mb-0 text-primary">{{$admin->name}}</h3>
                                    <span class="text-primary">Admin</span>
                                </div>
                                <ul class="list-unstyled mb-1-9">
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Firstname:</span>{{ $admin->Firstname}}</li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Lastname:</span>{{ $admin->Lastname}} </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span>{{ $admin->email}} </li>
                                    <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Birthday:</span>{{ $admin->Birthday}}</li>
                                    <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span>{{ $admin->Phone}} </li>
                                </ul>
                                <div class="d-flex justify-content-end mt-4">
                                    <a href="{{ route('adminprofile.edit',$admin->id) }}" class="btn py-2 px-lg-4 mb-2 rounded-0 d-none d-lg-block form-submit" style="border-radius: 10px; width: 120px; color: rgb(10, 10, 105); ">Edit<i class="fa fa-edit  ms-2" ></i></a>
                                </div> 
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
       
           
        </div>
    </div>
</section>











 @endsection