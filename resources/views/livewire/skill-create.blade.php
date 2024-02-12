<div class="bg-gray-200 rounded-xl">
    <form wire:submit="store" class="p-6">
        <x-form-input name="title" />
        @error('name')
            <div>
                <span>{{ $message }}</span>
            </div>
        @enderror
        <x-form-input name="icon_url" />
        @error('icon_url')
            <div>
                <span>{{ $message }}</span>
            </div>
        @enderror
        <x-form-input name="years_of_experience" type="number" />
        @error('years_of_experience')
            <div>
                <span>{{ $message }}</span>
            </div>
        @enderror
        <x-form-input name="description" type="textarea" />
        @error('description')
            <div>
                <span>{{ $message }}</span>
            </div>
        @enderror
        <x-submit-button class="mt-2 ml-4">Submit</x-submit-button>
    </form>
</div>
