@props(['content', 'type'])
<div wire:transition.duration.300ms wire.transition.delay.0ms {{ $attributes(['class' => "grid lg:grid-cols-5 grid-cols-3 p-6 justify-center"]) }}>
    @if($type == 'skill')
        @foreach($content as $item)
            <livewire:skill-panel :id="$item->id" type="{{ $type }}" />
        @endforeach
    @elseif($type == 'education')
        @foreach($content as $item)
            <livewire:education-panel :id="$item->id" />
        @endforeach
    @elseif($type == 'project')
        @foreach($content as $item)
            <livewire:project-panel :id="$item->id" />
        @endforeach
    @endif
</div>

