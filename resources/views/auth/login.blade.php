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

        {{-- Integrazione LoginWidget Filament --}}
        @livewire(Modules\User\Filament\Widgets\LoginWidget::class)

<<<<<<< HEAD
    </x-auth.authentication-card>
=======
    </x-authentication-card>
>>>>>>> c8b07ab (.)
</x-guest-layout>
