<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-input name="title" />
        <x-form-input name="icon_url" />
        <x-form-input name="url" />
        <x-form-input name="short_description" />
        <x-form-input name="description" type="textarea" />
        <label for="file" class="ml-4 uppercase text-xs font-semibold">Upload Photo(s)</label><br />
        <input class="ml-4 my-2" type="file" name="file" wire:model="photo" /><br />
        <div class="ml-4" wire:loading wire:target="photo">Uploading...</div><br />
        <div class="mx-2 p-2">
            <label for="featured" class="font-semibold uppercase text-xs">Featured?</label>
            <input type="checkbox" wire:model="featured" /><br />
        </div>
        <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
    </form>
    <x-delete-button class="ml-10 mb-2">Delete</x-delete-button>
</div>
