<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-input name="title" value="{{ $skill->title }}" />
        @error('title')
            <span>{{ $message }}</span>
        @enderror
        <x-form-input name="icon_url" value="{{ $skill->icon_url }}"/>
        @error('icon_url')
            <span>{{ $message }}</span>
        @enderror
        <x-form-input name="years_of_experience" type="number" value="{{ $skill->years_of_experience }}" />
        @error('years_of_experience')
            <span>{{ $message }}</span>
        @enderror
        <x-form-input name="description" type="textarea" value="{{ $skill->description }}"/>
        @error('description')
            <span>{{ $message }}</span>
        @enderror
        <label for="file" class="ml-4 uppercase text-xs font-semibold">Upload Photo(s)</label><br />
        <input class="ml-4 my-2" type="file" name="file" wire:model="photo" /><br />
        @error('photo')
            <span>{{ $message }}</span>
        @enderror
        <div class="ml-4" wire:loading wire:target="photo">Uploading...</div><br />
        <x-submit-button class="mt-2 ml-4">Submit</x-submit-button>
    </form>
    <x-delete-button class="ml-10 mb-2">Delete</x-delete-button>
</div>
