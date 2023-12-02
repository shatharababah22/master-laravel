@extends('layouts.Master')
@section('title', 'PRO')
@section('content')




    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3  mb-4 animated slideInDown header">Contact Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="volunteer-form">
        @if (Session::has('message_sent'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: 'Message',
                        text: "{{ Session::get('message_sent') }}",
                        icon: 'erorr',
                        showConfirmButton: true,
                        confirmButtonText: "OK",
                    });
                });
            </script>
        @endif
    </div>
    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p class="fs-5 fw-bold text-primary">Contact Us</p>
                    <h1 class="display-5 mb-5">If You Have Any Query, Please Contact Us</h1>
                    <p class="mb-4">If you have any inquiries or questions, please do not hesitate to get in touch with us. 
                        We are here to assist you and provide the information you need. Whether you're seeking clarification, additional details, or assistance with a particular matter, our dedicated team is ready to help.
                       </p>
                   
                       <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
                        {{ csrf_field() }}
                          
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control"  value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Email:</strong>
                                    <input type="text" name="email" class="form-control"  value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Phone:</strong>
                                    <input type="text" name="phone" class="form-control"  value="{{ old('phone') }}">
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <strong>Subject:</strong>
                                    <input type="text" name="subject" class="form-control"  value="{{ old('subject') }}">
                                    @if ($errors->has('subject'))
                                        <span class="text-danger">{{ $errors->first('subject') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <strong>Message:</strong>
                                    <textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
                                    @if ($errors->has('message'))
                                        <span class="text-danger">{{ $errors->first('message') }}</span>
                                    @endif
                                </div>  
                            </div>
                        </div>
                 
                        <div class="form-group text-center mt-2">
                            <button class="btn btn-success btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="min-height: 450px;">
                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe class="position-relative w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3449.7343138943776!2d35.92764591557947!3d31.94938193253042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151ca1391f8b1697%3A0x5484ef29a08749ce!2sAmman%2C%20Jordan!5e0!3m2!1sen!2sus!4v1603794290143!5m2!1sen!2sus"
                            frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->




    <section class="address_sec sec_space_small " data-aos="fade-up" data-aos-duration="2000">
        <div class="address_sec_wrap mt-4">
            <div class="container-sm">
                <div class="row g-5 justify-content-center align-items-center">
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-right" data-aos-duration="2000">
                            <div class="address_author bg-white position-absolute">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <span class="text-uppercase px-3">GET TO KNOW</span>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <h4 class="address_title">About PRO</h4>
                            <p class="address_desc">We are a strong community of 100,000+ customers</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-up" data-aos-duration="2000">
                            <div class="address_author bg-white position-absolute">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <span class="text-uppercase px-3">visit us</span>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <h4 class="address_title">Our Address</h4>
                            <p class="address_desc">Jordan - Amman City</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 text-center">
                        <div class="address_sec_cont d-flex flex-column position-relative" data-aos="fade-left" data-aos-duration="2000">
                            <div class="address_author2 bg-white position-absolute">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="address_author3 bg-white position-absolute">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="trend_sub_title d-flex align-items-center justify-content-center pb-2">
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <span class="text-uppercase px-3">Call or write</span>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                                <i class="far fa-circle"></i>
                            </div>
                            <h4 class="address_title">Phone & Email</h4>
                            <p class="address_desc">0790751376 && rocompany18@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>























@endsection