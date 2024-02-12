@props(['name', 'type' => 'text', 'value' => ''])
<div class="mx-2 p-2">
    <label for="{{ $name }}" class="font-semibold uppercase text-xs">{{ ucwords($name) }}</label><br />
    @if($type != 'textarea')
        <input  type="{{ $type }}"
                name="{{ $name }}"
                class="w-full p-2 h-8 rounded border focus:ring focus:outline-none font-semibold text-sm"
                value="{{ $value }}"
                wire:model="{{ $name }}"/>
        {{-- <x-form-error :name="$name" /> --}}
    @else
        <textarea name="{{ $name }}"
                  class="w-full p-2 rounded border focus:ring focus:outline-none font-semibold text-sm"
                  wire:model="{{ $name }}">{{ $value }}</textarea>
    @endif
</div>
