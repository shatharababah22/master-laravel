<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">

        @csrf
        @method('patch')

        <div class="row">
            <div class=" col-4">
                <div>
                @if ($user->name)
                <img src="{{ asset('images/' . $user->Image) }}" class="img-fluid" style="max-width: 200px; height: auto;">
                 @else
                    <img src="{{ asset('images/users/Default_pfp.svg.png') }}" alt="Default Profile Picture" class="img-fluid" style="max-width: 200px; height: auto;">
                @endif 

                <div class="form-group mt-3">
                    <label for="Image">{{ __('Upload new image') }}</label>
                    <input id="Image" name="Image" type="file" accept="images/*" class="form-control-file" :value="old('Image', $user->Image)" autocomplete="Image" />
                    {{-- <x-input-error class="mt-2" :messages="$errors->get('Image')" /> --}}
                </div>
            </div>
            </div>

        <div class="mt-4">
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="form-control text-center border-color-1 rounded-xs " :value="old('name', $user->name)" required autofocus autocomplete="name" style="width: 50%;height:43px;" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('name')" /> --}}
        </div>
        
        <div class="mt-4">
            <x-input-label for="Phone" :value="__('Phone')" />
            <x-text-input id="Phone" name="Phone" type="text" class="form-control text-center border-color-1 rounded-xs " :value="old('Phone', $user->Phone)" required autofocus autocomplete="Phone" style="width: 50%;height:43px;" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('Phone')" /> --}}
        </div>
    </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block form-control text-center border-color-1 rounded-xs w-full" :value="old('email', $user->email)" required autocomplete="username" style="width: 50%;height:43px;" />
            {{-- <x-input-error class="mt-2" :messages="$errors->get('email')" /> --}}

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 mt-2">
            <x-primary-button class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block " style="border-radius: 28px">{{ __('Save') }}</x-primary-button>

            
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @if(session('status') === 'profile-updated')
                Swal.fire({
                    icon: 'success',
                    title: 'Profile Updated',
                    text: 'Your profile information has been updated successfully.',
                    showConfirmButton: false,
                    timer: 3000 // Adjust the timer as needed
                });
            @elseif($errors->any())
                let errorMessage = '';
                @foreach ($errors->all() as $error)
                    errorMessage += '{{ $error }}\n'; // Add line breaks between errors
                @endforeach
    
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                    showCloseButton: true, // Optionally show a close button
                });
            @endif
        });
    </script>
    
    

</section>
