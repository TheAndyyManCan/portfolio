<div class="justify-self-center">
    <img wire:click="toggleDescription()" src="{{ asset('images/' . $item->thumbnail) }}" alt="{{ $item->title }}" class="transition ease-in-out hover:scale-105 duration-300 hover:cursor-pointer md:h-48 md:w-48 h-32 w-32 mx-auto bg-dark-200 rounded-xl"/>
    <div class="text-sm uppercase text-center p-2 font-semibold">{{ $item->institution }}</div>
    <div class="text-sm uppercase text-center p-2">{{ $item->title }}</div>
    <div class="text-sm uppercase text-center p-2">{{ $item->start_year }} - {{ $item->end_year }}</div>
    @if($showDescription)
        <div wire:transition.duration.300ms class="border-black bg-dark-200 text-dark-600 text-center rounded-xl p-6 mx-2">{{ $item->description }}</div>
    @endif
</div>
