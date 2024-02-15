<x-layout>
    <x-admin header="Edit Post">
        <livewire:post-edit :categories="$categories" :projects="$projects" id="{{ $post->id }}"/>
    </x-admin>
</x-layout>
