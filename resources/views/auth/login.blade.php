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

        {{-- Integrazione LoginWidget Filament --}}
        @livewire(Modules\User\Filament\Widgets\LoginWidget::class)

<<<<<<< HEAD
    </x-authentication-card>
=======
    </x-auth.authentication-card>
>>>>>>> 7401ccb (.)
</x-guest-layout>
