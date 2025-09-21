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
            {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
<<<<<<< HEAD
                    <x-utilities.button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-utilities.button>
=======
                    <x-button type="submit">
                        {{ __('Resend Verification Email') }}
                    </x-button>
>>>>>>> c8b07ab (.)
                </div>
            </form>

            <div>
                <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                >
                    {{ __('Edit Profile') }}</a>

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 ms-2">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
<<<<<<< HEAD
    </x-auth.authentication-card>
=======
    </x-authentication-card>
>>>>>>> c8b07ab (.)
</x-guest-layout>
