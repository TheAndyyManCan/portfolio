<x-layout>
    <x-admin header="Projects">
        <x-admin-content-panel :content="$projects" type="project" />
        <a href="/admin/project/create" class="bg-black text-white p-4 rounded-xl text-sm uppercase font-semibold ml-8">New Project</a>
    </x-admin>
</x-layout>
