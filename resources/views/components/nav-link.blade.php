@props(['link'])
<li class="transition ease-in-out inline px-2 font-semibold uppercase hover:text-white hover:-translate-y-1 hover:scale-110 duration-300"><a href="{{ $link }}" wire:navigate>{{ $slot }}</a></li>
