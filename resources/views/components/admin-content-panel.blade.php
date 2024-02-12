@props(['content', 'type'])
<div class="grid grid-cols-4 p-6">
    @foreach($content as $item)
        <x-admin-panel :item="$item" type="{{ $type }}" />
    @endforeach
</div>
