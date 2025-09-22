<x-guest-layout>
<<<<<<< HEAD
<<<<<<< HEAD
    <x-auth.authentication-card>
        <x-slot name="logo">
            <x-filament-panels::logo />
        </x-slot>

        <x-forms.validation-errors class="mb-4" />
=======
=======
>>>>>>> 0eb3291 (.)
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
<<<<<<< HEAD
<<<<<<< HEAD
                <x-forms.input-label for="name" value="{{ __('Name') }}" />
                <x-forms.input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-forms.input-label for="email" value="{{ __('Email') }}" />
                <x-forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-forms.input-label for="password" value="{{ __('Password') }}" />
                <x-forms.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-forms.input-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-forms.input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
=======
=======
>>>>>>> 0eb3291 (.)
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
<<<<<<< HEAD
<<<<<<< HEAD
                    <x-forms.input-label for="terms">
                        <div class="flex items-center">
                            <x-forms.checkbox name="terms" id="terms" required />
=======
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
>>>>>>> c8b07ab (.)
=======
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />
>>>>>>> 0eb3291 (.)

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

<<<<<<< HEAD
<<<<<<< HEAD
                <x-utilities.button class="ms-4">
                    {{ __('Register') }}
                </x-utilities.button>
            </div>
        </form>
    </x-auth.authentication-card>
=======
=======
>>>>>>> 0eb3291 (.)
                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
</x-guest-layout>
