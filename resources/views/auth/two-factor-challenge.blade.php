<x-guest-layout>
<<<<<<< HEAD
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
=======
    <x-auth.authentication-card>
        <x-slot name="logo">
            <x-filament-panels::logo />
>>>>>>> 7401ccb (.)
        </x-slot>

        <div x-data="{ recovery: false }">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" x-show="! recovery">
                {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
            </div>

            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400" x-cloak x-show="recovery">
                {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
            </div>

<<<<<<< HEAD
            <x-validation-errors class="mb-4" />
=======
            <x-forms.validation-errors class="mb-4" />
>>>>>>> 7401ccb (.)

            <form method="POST" action="{{ route('two-factor.login') }}">
                @csrf

                <div class="mt-4" x-show="! recovery">
<<<<<<< HEAD
                    <x-label for="code" value="{{ __('Code') }}" />
                    <x-input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-cloak x-show="recovery">
                    <x-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
=======
                    <x-forms.input-label for="code" value="{{ __('Code') }}" />
                    <x-forms.input id="code" class="block mt-1 w-full" type="text" inputmode="numeric" name="code" autofocus x-ref="code" autocomplete="one-time-code" />
                </div>

                <div class="mt-4" x-cloak x-show="recovery">
                    <x-forms.input-label for="recovery_code" value="{{ __('Recovery Code') }}" />
                    <x-forms.input id="recovery_code" class="block mt-1 w-full" type="text" name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code" />
>>>>>>> 7401ccb (.)
                </div>

                <div class="flex items-center justify-end mt-4">
                    <button type="button" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer"
                                    x-show="! recovery"
                                    x-on:click="
                                        recovery = true;
                                        $nextTick(() => { $refs.recovery_code.focus() })
                                    ">
                        {{ __('Use a recovery code') }}
                    </button>

                    <button type="button" class="text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 underline cursor-pointer"
                                    x-cloak
                                    x-show="recovery"
                                    x-on:click="
                                        recovery = false;
                                        $nextTick(() => { $refs.code.focus() })
                                    ">
                        {{ __('Use an authentication code') }}
                    </button>

<<<<<<< HEAD
                    <x-button class="ms-4">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>
=======
                    <x-utilities.button class="ms-4">
                        {{ __('Log in') }}
                    </x-utilities.button>
                </div>
            </form>
        </div>
    </x-auth.authentication-card>
>>>>>>> 7401ccb (.)
</x-guest-layout>
