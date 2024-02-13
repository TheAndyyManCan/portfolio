<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-input name="title" />
        <x-form-input name="institution" />
        <x-form-input name="icon_url" />
        <x-form-input name="start_year" />
        <x-form-input name="end_year" />
        <x-form-input name="qualification" />
        <x-form-input name="description" type="textarea" />
        <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
    </form>
</div>
