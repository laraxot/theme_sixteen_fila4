<?php

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};

middleware(['guest']);
name('login');

?>

<x-layouts.app>
<<<<<<< HEAD
    <x-slot name="title">
        {{ __('Login') }}
    </x-slot>

<<<<<<< HEAD
    <!-- Beautiful Login Page Section -->
    <section class="login-page-bg flex items-center justify-center p-4">
        @livewire(\Modules\User\Filament\Widgets\Auth\LoginWidget::class)
    </section>
=======
    @livewire(\Modules\User\Filament\Widgets\Auth\LoginWidget::class)
>>>>>>> 90b9679 (.)
=======
  @livewire(\Modules\User\Filament\Widgets\LoginWidget::class)    
>>>>>>> 7401ccb (.)
</x-layouts.app>
