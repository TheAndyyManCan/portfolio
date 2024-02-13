<x-layout>
    <x-admin header="Education">
        <x-admin-content-panel :content="$education" type="education" />
        <a href="/admin/education/create" class="bg-black text-white p-4 rounded-xl text-sm uppercase font-semibold ml-8">New Education</a>
    </x-admin>
</x-layout>
