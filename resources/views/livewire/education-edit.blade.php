<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-input name="title" />
        <x-form-input name="institution" />
        <x-form-input name="icon_url" />
        <x-form-input name="start_year" />
        <x-form-input name="end_year" />
        <x-form-input name="qualification" />
        <x-form-input name="description" type="textarea" />
        <label for="file" class="ml-4 uppercase text-xs font-semibold">Upload Photo(s)</label><br />
        <input class="ml-4 my-2" type="file" name="file" wire:model="photo" /><br />
        <div class="ml-4" wire:loading wire:target="photo">Uploading...</div><br />
        <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
    </form>
    <x-delete-button class="ml-10 mb-2">Delete</x-delete-button>
</div>
