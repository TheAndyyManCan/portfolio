<div class="bg-gray-200 rounded-xl">
    <form wire:submit="edit" class="p-6">
        <x-form-select :items="$categories" name="category" model="category_id"/>
        <x-form-select :items="$projects" name="project" model="project_id" />
        <x-form-input name="title" />
        <x-form-input name="description" />
        <x-form-input name="content" type="textarea" />
        <x-file-input label="upload photo(s)" model="photos" />
        <div wire:loading wire:target="photos">Uploading...</div><br />
        <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
    </form>
    <x-delete-button class="ml-10 mb-2">Delete</x-delete-button>
</div>
