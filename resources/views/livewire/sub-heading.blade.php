<div>
    <div wire:click="toggleContent()" class="border-b border-gray-300 mx-32 py-6 text-3xl uppercase font-semibold text-center hover:cursor-pointer">
        {{ $text }}
    </div>
    @if($showContent)
        <x-content-grid :content="$content" />
    @endif
</div>
