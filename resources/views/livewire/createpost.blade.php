<div class="bg-gray-200 rounded-xl">
    <form wire:submit="store" class="p-6">
        <x-form-select :items="$categories" name="category" model="category_id"/>
        <x-form-select :items="$projects" name="project" model="project_id" />
        <x-form-input name="title" />
        <x-form-input name="description" />
        <x-form-input name="content" type="textarea" />
        <x-submit-button class="ml-4 mt-2">Submit</x-submit-button>
    </form>
</div>
