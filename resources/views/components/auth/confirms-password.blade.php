@props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<<<<<<< HEAD
<<<<<<< HEAD
<x-overlays.dialog-modal wire:model.live="confirmingPassword">
=======
<x-dialog-modal wire:model.live="confirmingPassword">
>>>>>>> c8b07ab (.)
=======
<x-dialog-modal wire:model.live="confirmingPassword">
>>>>>>> 0eb3291 (.)
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
<<<<<<< HEAD
<<<<<<< HEAD
            <x-forms.input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}" autocomplete="current-password"
=======
            <x-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}" autocomplete="current-password"
>>>>>>> c8b07ab (.)
=======
            <x-input type="password" class="mt-1 block w-3/4" placeholder="{{ __('Password') }}" autocomplete="current-password"
>>>>>>> 0eb3291 (.)
                        x-ref="confirmable_password"
                        wire:model="confirmablePassword"
                        wire:keydown.enter="confirmPassword" />

<<<<<<< HEAD
<<<<<<< HEAD
            <x-forms.input-error for="confirmable_password" class="mt-2" />
=======
            <x-input-error for="confirmable_password" class="mt-2" />
>>>>>>> c8b07ab (.)
=======
            <x-input-error for="confirmable_password" class="mt-2" />
>>>>>>> 0eb3291 (.)
        </div>
    </x-slot>

    <x-slot name="footer">
<<<<<<< HEAD
<<<<<<< HEAD
        <x-utilities.secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-utilities.secondary-button>

        <x-utilities.button class="ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-utilities.button>
    </x-slot>
</x-overlays.dialog-modal>
=======
=======
>>>>>>> 0eb3291 (.)
        <x-secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
            {{ __('Cancel') }}
        </x-secondary-button>

        <x-button class="ms-3" dusk="confirm-password-button" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-button>
    </x-slot>
</x-dialog-modal>
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
@endonce
