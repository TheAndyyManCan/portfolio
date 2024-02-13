<x-layout>
    <x-admin header="Skills">
        <x-admin-content-panel :content="$skills" type="skills"/>
        <a href="/admin/skills/create" class="bg-black text-white p-4 rounded-xl text-sm uppercase font-semibold ml-8">New Skill</a>
    </x-admin>
</x-layout>
