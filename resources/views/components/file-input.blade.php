@props(['label', 'model'])
<label for="file" class="ml-4 uppercase text-xs font-semibold">{{ $label }}</label><br />
<input class="ml-4 my-2" type="file" name="file" wire:model="{{ $model }}" multiple /><br />
