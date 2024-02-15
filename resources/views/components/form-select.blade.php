@props(['items', 'name', 'model' => ''])
<div class="mx-2 p-2">
    <label for="categories" class="font-semibold uppercase text-xs">{{ $name }}</label><br />
    <select class="w-full p-2 hover:cursor-pointer focus:ring" wire:model="{{ $model }}" name="categories">
        <option value="{{ null }}">-- Select {{ $name }} --</option>
        @foreach($items as $item)
            <option class="hover:cursor-pointer" value="{{ $item->id }}">{{ $item->title }}</option>
        @endforeach
    </select>
</div>
