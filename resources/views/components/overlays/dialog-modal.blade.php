@props(['id' => null, 'maxWidth' => null])

<<<<<<< HEAD
<<<<<<< HEAD
<x-overlays.modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
=======
<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
>>>>>>> c8b07ab (.)
=======
<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
>>>>>>> 0eb3291 (.)
    <div class="px-6 py-4">
        <div class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-gray-600 dark:text-gray-400">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-end px-6 py-4 bg-gray-100 dark:bg-gray-800 text-end">
        {{ $footer }}
    </div>
<<<<<<< HEAD
<<<<<<< HEAD
</x-overlays.modal>
=======
</x-modal>
>>>>>>> c8b07ab (.)
=======
</x-modal>
>>>>>>> 0eb3291 (.)
