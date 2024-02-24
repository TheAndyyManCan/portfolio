<div class="mb-2">
    <img wire:click="toggleDescription()" src="{{ asset('images/' . $item->thumbnail) }}" class="transition ease-in-out hover:scale-105 duration-300 hover:cursor-pointer md:h-48 md:w-48 h-32 w-32 mx-auto rounded-xl"/>
    <div class="text-sm uppercase text-center p-2 font-semibold">{{ $item->title }}</div>
    @if($showDescription)
    <div wire:transition.duration.300ms class="border-black bg-dark-200 text-dark-600 text-center rounded-xl p-6 mx-2">
        <div class="font-semibold uppercase text-white">Years of experience: {{ $item->years_of_experience }}</div>
        <div>{{ $item->description }}</div>
    </div>
    @endif
</div>
