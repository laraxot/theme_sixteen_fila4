<<<<<<< HEAD
<x-form-section submit="updateTeamName">
=======
<x-forms.form-section submit="updateTeamName">
>>>>>>> 7401ccb (.)
    <x-slot name="title">
        {{ __('Team Name') }}
    </x-slot>

    <x-slot name="description">
        {{ __('The team\'s name and owner information.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Team Owner Information -->
        <div class="col-span-6">
<<<<<<< HEAD
            <x-label value="{{ __('Team Owner') }}" />
=======
            <x-forms.input-label value="{{ __('Team Owner') }}" />
>>>>>>> 7401ccb (.)

            <div class="flex items-center mt-2">
                <img class="size-12 rounded-full object-cover" src="{{ $team->owner->profile_photo_url }}" alt="{{ $team->owner->name }}">

                <div class="ms-4 leading-tight">
                    <div class="text-gray-900 dark:text-white">{{ $team->owner->name }}</div>
                    <div class="text-gray-700 dark:text-gray-300 text-sm">{{ $team->owner->email }}</div>
                </div>
            </div>
        </div>

        <!-- Team Name -->
        <div class="col-span-6 sm:col-span-4">
<<<<<<< HEAD
            <x-label for="name" value="{{ __('Team Name') }}" />

            <x-input id="name"
=======
            <x-forms.input-label for="name" value="{{ __('Team Name') }}" />

            <x-forms.input id="name"
>>>>>>> 7401ccb (.)
                        type="text"
                        class="mt-1 block w-full"
                        wire:model="state.name"
                        :disabled="! Gate::check('update', $team)" />

<<<<<<< HEAD
            <x-input-error for="name" class="mt-2" />
=======
            <x-forms.input-error for="name" class="mt-2" />
>>>>>>> 7401ccb (.)
        </div>
    </x-slot>

    @if (Gate::check('update', $team))
        <x-slot name="actions">
<<<<<<< HEAD
            <x-action-message class="me-3" on="saved">
                {{ __('Saved.') }}
            </x-action-message>

            <x-button>
                {{ __('Save') }}
            </x-button>
        </x-slot>
    @endif
</x-form-section>
=======
            <x-feedback.action-message class="me-3" on="saved">
                {{ __('Saved.') }}
            </x-feedback.action-message>

            <x-utilities.button>
                {{ __('Save') }}
            </x-utilities.button>
        </x-slot>
    @endif
</x-forms.form-section>
>>>>>>> 7401ccb (.)
