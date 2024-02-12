@props(['item', 'type'])
<div>
    <a href="/admin/{{ $type }}/{{ $item->id }}/edit">
        <img src="{{ $item->icon_url }}" class="transition ease-in-out hover:scale-105 duration-300 hover:cursor-pointer h-32 w-32 mx-auto"/>
    </a>
    <div class="text-sm uppercase text-center p-2">{{ $item->title }}</div>
</div>
