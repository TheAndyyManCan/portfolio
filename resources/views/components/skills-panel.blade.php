@props(['skill'])
<div>
    <img src="{{ $skill->icon_url }}" class="transition ease-in-out hover:scale-105 duration-300 hover:cursor-pointer"/>
    <div class="text-sm uppercase text-center p-2">{{ $skill->title }}</div>
</div>
