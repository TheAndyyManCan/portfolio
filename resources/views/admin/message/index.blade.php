<x-layout>
    <x-admin header="Messages">
        <table class="w-full text-center border">
            <tr class="uppercase border bg-dark-300 text-white">
                <th>Sender</th>
                <th>Subject</th>
                <th>View</th>
            </tr>
            @foreach($messages as $message)
                <tr class ="border
                    @php
                        echo ($message->read) ? ' ' : 'font-semibold ';
                        echo ($message->id % 2 == 0) ? 'bg-dark-100' : 'bg-dark-200';
                    @endphp
                ">
                    <td>{{ $message->sender_name }}</td>
                    <td>{{ $message->subject }}</td>
                    <td><a href="/admin/message/{{ $message->id }}/view" class="text-blue-700 font-semibold">View</a></td>
                </tr>
            @endforeach
        </table>
        <div>{{ $messages->links() }}</div>
    </x-admin>
</x-layout>
