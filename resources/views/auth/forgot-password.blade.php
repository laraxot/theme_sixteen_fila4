<x-guest-layout>
<<<<<<< HEAD
<<<<<<< HEAD
    <x-auth.authentication-card>
        <x-slot name="logo">
            <x-filament-panels::logo />
=======
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
>>>>>>> c8b07ab (.)
=======
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
>>>>>>> 0eb3291 (.)
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

<<<<<<< HEAD
<<<<<<< HEAD
        <x-forms.validation-errors class="mb-4" />
=======
        <x-validation-errors class="mb-4" />
>>>>>>> c8b07ab (.)
=======
        <x-validation-errors class="mb-4" />
>>>>>>> 0eb3291 (.)

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
<<<<<<< HEAD
<<<<<<< HEAD
                <x-forms.input-label for="email" value="{{ __('Email') }}" />
                <x-forms.input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-utilities.button>
                    {{ __('Email Password Reset Link') }}
                </x-utilities.button>
            </div>
        </form>
    </x-auth.authentication-card>
=======
=======
>>>>>>> 0eb3291 (.)
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
</x-guest-layout>
