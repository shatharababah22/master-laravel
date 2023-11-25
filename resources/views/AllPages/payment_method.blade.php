@extends('layouts.master')
@section('title' , 'Bill')
@section('content')
        

<div   tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="volunteer-form">
        @if (Session::has('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        title: 'Message',
                        text: "{{ Session::get('success') }}",
                        icon: 'success',
                        showConfirmButton: true,
                        confirmButtonText: "OK",
                    });
                });
            </script>
        @endif
    </div>
           
        <form id="paymentForm" method="POST" action="{{ route('Paymentmethod') }}">
       
          <div class="modal-body">
            @csrf
            <div class="col-md-12 mb-4">
              <span class="me-2" style="display: inline-block; font-weight: bold; font-style: italic; font-family: 'Arial', sans-serif;">Payment method</span>                                          <div class="icons" style="display: inline-block;">
                
                    <label><a class="btn btn-primary" style="width: 150px">
                        <input type="radio" name="PaymentType" value="Cash" onclick="updateSelectedPaymentType(this.value)">
                        <img src="{{ asset('images/payment-method.png') }}" width="40"></a>
                    </label>
                 
                   
                    <label><a class="btn btn-primary"  style="width: 150px">
                        <input type="radio" name="PaymentType" value="Paypal" onclick="updateSelectedPaymentType(this.value)">
                        <img src="{{ asset('images/pay.png') }}" width="40">
                    </label></a>
                </div>
              </br>
                <span id="selectedPaymentMethod" class="mt-2">You selected: <span id="selectedPaymentType"></span></span>
                <input type="hidden" name="selectedPaymentType" id="hiddenSelectedPaymentType">
            </div>
                                           </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  

@endsection




