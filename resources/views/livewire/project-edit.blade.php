<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-input name="title" />
        <x-form-input name="icon_url" />
        <x-form-input name="url" />
        <x-form-input name="short_description" />
        <x-form-input name="description" type="textarea" />
        <div class="mx-2 p-2">
            <label for="featured" class="font-semibold uppercase text-xs">Featured?</label>
            <input type="checkbox" wire:model="featured" /><br />
        </div>
        <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
    </form>
</div>
