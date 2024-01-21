<div class="max-w-full bg-black flex">
    <div class="p-6 transition ease-in-out hover:-translate-y-1 hover:scale-105 duration-300">
        <a href="/" class="text-white uppercase font-bold text-4xl" wire:navigate >Andy McDonald</a>
    </div>
    <nav class="flex p-8 my-auto right-0 absolute">
        <ul class="text-xs text-gray-200 flex">
            <x-nav-link link="/about">About</x-nav-link>
            <x-nav-link link="/projects">Projects</x-nav-link>
            <x-nav-link link="/contact">Contact</x-nav-link>
            @auth
                <x-nav-link link="/admin">Admin</x-nav-link>
                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="transition ease-in-out inline px-2 font-semibold uppercase hover:text-white hover:-translate-y-1 hover:scale-110 duration-300">Logout</button>
                </form>
            @endauth
        </ul>
    </nav>
</div>
