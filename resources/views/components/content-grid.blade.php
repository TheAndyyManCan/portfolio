@props(['content'])
<div wire:transition.duration.300ms wire.transition.delay.0ms class="grid grid-cols-5 p-6">
    @foreach($content as $item)
        <livewire:skill-panel :id="$item->id" />
    @endforeach
</div>

