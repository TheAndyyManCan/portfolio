<div>
    <img wire:click="toggleDescription()" src="{{ $skill->icon_url }}" class="transition ease-in-out hover:scale-105 duration-300 hover:cursor-pointer h-48 w-48 mx-auto"/>
    <div class="text-sm uppercase text-center p-2">{{ $skill->title }}</div>
    @if($showDescription)
    <div wire:transition.duration.300ms class="border-black bg-gray-300 text-center rounded-xl p-6">{{ $skill->description }}</div>
    @endif
</div>
