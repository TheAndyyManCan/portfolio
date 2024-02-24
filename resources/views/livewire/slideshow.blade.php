<div>
    @if($pictures->count() > 1)
        <div class="{{ $heightAndWidthClass }} mx-auto relative">
            <button wire:click="prev" class="absolute left-0 top-1/2 rounded-full bg-dark-200 py-2 px-4 text-white hover:bg-dark-600 hover:text-dark-200"><</button>
            <button wire:click="next" class="absolute right-0 top-1/2 rounded-full bg-dark-200 py-2 px-4 text-white hover:bg-dark-600 hover:text-dark-200">></button>
            @foreach($pictures as $key => $picture)
                <img src=" {{asset('images/' . $picture->url )}}" alt="image"
                @if($active == $key)
                    class="{{ $activeClass }}"
                @else
                    class="{{ $inactiveClass }}"
                @endif
                >
            @endforeach
        </div>
    @else
        <div class="{{ $heightAndWidthClass }} mx-auto overflow-hidden rounded-xl">
            @foreach($pictures as $picture)
                <img src="{{ url('images/' . $picture->url) }}" alt="image">
            @endforeach
        </div>
    @endif
</div>
