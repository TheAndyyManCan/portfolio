<div>
    <img wire:click="toggleDescription()" src="{{ asset('images/' . $item->thumbnail) }}" class="transition ease-in-out hover:scale-105 duration-300 hover:cursor-pointer md:h-48 md:w-48 h-32 w-32 mx-auto"/>
    <div class="text-sm uppercase text-center p-2 font-semibold">{{ $item->title }}</div>
    @if($showDescription)
        <div wire:transition.duration.300ms class="border-black bg-dark-200 text-center text-dark-600 rounded-xl p-6 mx-2">
            {{ $item->description }}<br />
            <a href="/projects/{{ $item->id }}" class="text-white font-bold">Find out more</a>
        </div>
    @endif
</div>
