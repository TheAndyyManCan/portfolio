<x-layout>
    <x-admin header="Categories">
        @foreach($categories as $category)
            <div class="bg-gray-200 w-full p-4 hover:bg-gray-500">
                <a href="/admin/category/{{ $category->id }}/edit" class="object-fill bg-gray-200 p-4 mx-8 rounded-xl">{{ $category->title }}</a>
            </div>
        @endforeach
        <div class="space-y-2">
            <a href="/admin/category/create" class="bg-black text-white p-4 rounded-xl text-sm uppercase font-semibold ml-8">New Category</a>
        </div>
    </x-admin>
</x-layout>
