<section class="mt-4">

    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="form-control text-center border-color-1 rounded-xs " autocomplete="current-password"  style="width: 50%;height:43px;" />
            {{-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
        </div>

        <div class="mt-2">
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="form-control text-center border-color-1 rounded-xs " autocomplete="new-password" style="width: 50%;height:43px;"  />
            {{-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
        </div>

        <div class="mt-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="form-control text-center border-color-1 rounded-xs " autocomplete="new-password" style="width: 50%;height:43px;"  />
            {{-- <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> --}}
        </div>

        <div class="flex items-center gap-4 mt-2">
            <x-primary-button class="btn btn-primary py-2 px-lg-4 rounded-0 d-none d-lg-block " style="border-radius: 28px">{{ __('Save') }}</x-primary-button>
{{-- 
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif --}}
        </div>
    </form>

        <!-- ... (your form and other HTML) ... -->
    
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Check if the session has a status for password-updated
                @if(session('status') === 'password-updated')
                    Swal.fire({
                        icon: 'success',
                        title: 'Password Updated',
                        text: 'Your password has been updated successfully.',
                        showConfirmButton: false,
                        timer: 3000 // Adjust the timer as needed
                    });
                @endif
    
                // Check if there are any errors to display
                @if($errors->updatePassword->any())
    let errorMessage = '';
    @foreach ($errors->updatePassword->all() as $error)
        errorMessage += '{{ $error }}<br>'; // Add line breaks between errors
    @endforeach

    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: '<div style="font-weight: bold;">' + errorMessage + '</div>',
        showCloseButton: true, // Optionally show a close button
    });
@endif

            });
        </script>

    
    
    
</section>
