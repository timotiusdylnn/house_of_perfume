<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form action="{{ route('profile.update-photo') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="profile_photo" class="block text-sm font-medium text-gray-700">Profile Photo</label>

            <div class="flex items-center mt-2">
                @if (Auth::user()->profile_photo_path)
                    <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" 
                         alt="Profile Photo" 
                         class="w-16 h-16 rounded-full">
                @else
                    <div class="w-16 h-16 bg-gray-200 rounded-full flex items-center justify-center">
                        <span class="text-gray-500">N/A</span>
                    </div>
                @endif

                <input type="file" name="profile_photo" id="profile_photo" class="ml-4">
            </div>
        </div>

        <div class="mt-4 flex space-x-2">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Upload</button>

            @if (Auth::user()->profile_photo_path)
                <!-- Remove photo button should call a separate route to handle photo removal -->
                <button type="button" onclick="confirmRemovePhoto()" 
                        class="px-4 py-2 bg-red-600 text-white rounded-md">
                    Remove Photo
                </button>
            @endif
        </div>
    </form>

    <form id="remove-photo-form" action="{{ route('profile.remove-photo') }}" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <script>
        // Function to confirm and submit the removal of the profile photo
        function confirmRemovePhoto() {
            if (confirm('Are you sure you want to remove your profile photo?')) {
                // Submit the hidden form for removing the photo
                document.getElementById('remove-photo-form').submit();
            }
        }
    </script>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>