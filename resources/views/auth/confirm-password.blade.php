<x-guest-layout>
<<<<<<< HEAD
    <x-auth.authentication-card>
        <x-slot name="logo">
            <x-filament-panels::logo />
=======
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
>>>>>>> c8b07ab (.)
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

<<<<<<< HEAD
        <x-forms.validation-errors class="mb-4" />
=======
        <x-validation-errors class="mb-4" />
>>>>>>> c8b07ab (.)

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div>
<<<<<<< HEAD
                <x-forms.input-label for="password" value="{{ __('Password') }}" />
                <x-forms.input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-utilities.button class="ms-4">
                    {{ __('Confirm') }}
                </x-utilities.button>
            </div>
        </form>
    </x-auth.authentication-card>
=======
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" autofocus />
            </div>

            <div class="flex justify-end mt-4">
                <x-button class="ms-4">
                    {{ __('Confirm') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
>>>>>>> c8b07ab (.)
</x-guest-layout>
