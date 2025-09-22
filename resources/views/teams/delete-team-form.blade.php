<<<<<<< HEAD
<<<<<<< HEAD
<x-layout.sections.action-section>
=======
<x-action-section>
>>>>>>> c8b07ab (.)
=======
<x-action-section>
>>>>>>> 0eb3291 (.)
    <x-slot name="title">
        {{ __('Delete Team') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Permanently delete this team.') }}
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600 dark:text-gray-400">
            {{ __('Once a team is deleted, all of its resources and data will be permanently deleted. Before deleting this team, please download any data or information regarding this team that you wish to retain.') }}
        </div>

        <div class="mt-5">
<<<<<<< HEAD
<<<<<<< HEAD
            <x-utilities.danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Delete Team') }}
            </x-utilities.danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-overlays.confirmation-modal wire:model.live="confirmingTeamDeletion">
=======
=======
>>>>>>> 0eb3291 (.)
            <x-danger-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                {{ __('Delete Team') }}
            </x-danger-button>
        </div>

        <!-- Delete Team Confirmation Modal -->
        <x-confirmation-modal wire:model.live="confirmingTeamDeletion">
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
            <x-slot name="title">
                {{ __('Delete Team') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Are you sure you want to delete this team? Once a team is deleted, all of its resources and data will be permanently deleted.') }}
            </x-slot>

            <x-slot name="footer">
<<<<<<< HEAD
<<<<<<< HEAD
                <x-utilities.secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-utilities.secondary-button>

                <x-utilities.danger-button class="ms-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Delete Team') }}
                </x-utilities.danger-button>
            </x-slot>
        </x-overlays.confirmation-modal>
    </x-slot>
</x-layout.sections.action-section>
=======
=======
>>>>>>> 0eb3291 (.)
                <x-secondary-button wire:click="$toggle('confirmingTeamDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3" wire:click="deleteTeam" wire:loading.attr="disabled">
                    {{ __('Delete Team') }}
                </x-danger-button>
            </x-slot>
        </x-confirmation-modal>
    </x-slot>
</x-action-section>
<<<<<<< HEAD
>>>>>>> c8b07ab (.)
=======
>>>>>>> 0eb3291 (.)
