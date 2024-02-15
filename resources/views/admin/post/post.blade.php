<x-layout>
    <x-admin header="Posts">
        <table class="w-full text-center border">
            <tr class="uppercase border bg-gray-200">
                <th>ID</th>
                <th>Title</th>
                <th>Edit</th>
            </tr>
            @foreach($posts as $post)
                <tr class="border
                    @php
                        echo ($post->id % 2 == 0) ? 'bg-gray-200' : 'bg-white';
                    @endphp">
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td><a href="/admin/post/{{ $post->id }}/edit" class="text-blue-700 font-semibold">Edit</a></td>
                </tr>
            @endforeach
        </table>
        <a href="/admin/post/create" class="bg-black text-white p-4 rounded-xl text-sm uppercase font-semibold ml-8">New Post</a>
    </x-admin>
</x-layout>
