<x-layout>
    <x-admin header="Files">
        <table class="w-full text-center border">
            <tr class="bg-gray-200 uppercase border">
                <th>ID</th>
                <th>Project ID</th>
                <th>Post ID</th>
                <th>Delete</th>
            </tr>
            @foreach($files as $file)
                <tr class="border">
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->project_id }}</td>
                    <td>{{ $file->post_id }}</td>
                    <td><livewire:file-delete id="{{ $file->id }}" /></td>
                </tr>
            @endforeach
        </table>
    </x-admin>
</x-layout>
