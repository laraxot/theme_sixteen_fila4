<<<<<<< HEAD
<x-form-section submit="createTeam">
=======
<x-forms.form-section submit="createTeam">
>>>>>>> 7401ccb (.)
    <x-slot name="title">
        {{ __('Team Details') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new team to collaborate with others on projects.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6">
<<<<<<< HEAD
            <x-label value="{{ __('Team Owner') }}" />
=======
            <x-forms.input-label value="{{ __('Team Owner') }}" />
>>>>>>> 7401ccb (.)

            <div class="flex items-center mt-2">
                <img class="size-12 rounded-full object-cover" src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}">

                <div class="ms-4 leading-tight">
                    <div class="text-gray-900 dark:text-white">{{ $this->user->name }}</div>
                    <div class="text-gray-700 dark:text-gray-300 text-sm">{{ $this->user->email }}</div>
                </div>
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
<<<<<<< HEAD
            <x-label for="name" value="{{ __('Team Name') }}" />
            <x-input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" autofocus />
            <x-input-error for="name" class="mt-2" />
=======
            <x-forms.input-label for="name" value="{{ __('Team Name') }}" />
            <x-forms.input id="name" type="text" class="mt-1 block w-full" wire:model="state.name" autofocus />
            <x-forms.input-error for="name" class="mt-2" />
>>>>>>> 7401ccb (.)
        </div>
    </x-slot>

    <x-slot name="actions">
<<<<<<< HEAD
        <x-button>
            {{ __('Create') }}
        </x-button>
    </x-slot>
</x-form-section>
=======
        <x-utilities.button>
            {{ __('Create') }}
        </x-utilities.button>
    </x-slot>
</x-forms.form-section>
>>>>>>> 7401ccb (.)
