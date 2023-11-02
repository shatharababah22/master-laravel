@extends('layouts.Master')
@section('title', 'PRO')
@section('content')


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 mb-4 animated slideInDown header"> Edit Profile Page</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">profile</a></li>
                    
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div >
            <div class="p-4 sm:p-8 bg-white   sm:rounded-lg">
                <div>
                    @include('profile.partials.update-profile-information-form')
                </div>
                <div>
                    @include('profile.partials.update-password-form')
                </div>
                <div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
{{-- 
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
               
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
             
            </div> --}}
        </div>
    </div>
    @endsection
