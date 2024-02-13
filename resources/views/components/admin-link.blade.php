@props(['link', 'text'])
<li class="text-center hover:text-white rounded hover:bg-black border border-gray-200 mb-3 py-2 uppercase font-semibold text-sm">
    <a wire:navigate href="{{ $link }}">{{ $text }}</a>
</li>
