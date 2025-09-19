<?php

declare(strict_types=1);

use function Laravel\Folio\{middleware, name};

middleware(['guest']);
name('login');

?>

<x-layouts.app>
  @livewire(\Modules\User\Filament\Widgets\LoginWidget::class)    
</x-layouts.app>
