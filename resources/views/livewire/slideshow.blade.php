<div>
    @if($pictures->count() > 1)
        <div class="{{ $heightAndWidthClass }} mx-auto relative">
            <button wire:click="prev" class="absolute left-0 top-1/2 rounded-full bg-black py-2 px-4 text-white hover:bg-white hover:text-black"><</button>
            <button wire:click="next" class="absolute right-0 top-1/2 rounded-full bg-black py-2 px-4 text-white hover:bg-white hover:text-black">></button>
            @foreach($pictures as $key => $picture)
                <img src=" {{url('images/' . $picture->url )}}" alt="image"
                @if($active == $key)
                    class="{{ $activeClass }}"
                @else
                    class="{{ $inactiveClass }}"
                @endif
                >
            @endforeach
        </div>
    @else
        <div class="{{ $heightAndWidthClass }} mx-auto overflow-hidden">
            @foreach($pictures as $picture)
                <img src="{{ url('images/' . $picture->url) }}" alt="image">
            @endforeach
        </div>
    @endif
</div>
