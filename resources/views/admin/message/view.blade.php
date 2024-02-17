<x-layout>
    <x-admin header="View Message">
        <div class="bg-gray-200 p-6 rounded-xl">
            <label for="sender" class="text-xs uppercase font-semibold">Sender</label>
            <div name="sender">{{ $message->sender_name }}</div><br />
            <label for="email" class="text-xs uppercase font-semibold">Email</label>
            <div name="email">{{ $message->sender_email }}</div><br />
            <label for="subject" class="text-xs uppercase font-semibold">Subject</label>
            <div name="subject">{{ $message->subject }}</div><br />
            <label for="message" class="text-xs uppercase font-semibold">Message</label>
            <div name="message">{{ $message->message }}</div><br />
        </div>
    </x-admin>
</x-layout>
