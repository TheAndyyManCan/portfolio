<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-input name="title" value="{{ $skill->title }}" />
        <x-form-input name="icon_url" value="{{ $skill->icon_url }}"/>
        <x-form-input name="years_of_experience" type="number" value="{{ $skill->years_of_experience }}" />
        <x-form-input name="description" type="textarea" value="{{ $skill->description }}"/>
        <x-submit-button class="mt-2 ml-4">Submit</x-submit-button>
    </form>
</div>
