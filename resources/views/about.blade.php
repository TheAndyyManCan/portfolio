<x-layout>
    <div class="mx-32 py-6 text-4xl uppercase font-bold text-center">
        About
    </div>
    <div class="lg:flex 2xl:mx-64 lg:mx-32 mx-8">
        <div class="lg:order-last">
            <livewire:slideshow :pictures="$posts['About']->pictures" heightAndWidth=96 />
        </div>
        <div class="lg:flex-0 md:w-2/3 w-full p-6 mx-auto bg-dark-200 rounded-xl lg:my-0 my-4">
            {!! $posts['About']->content !!}
        </div>
    </div>
</x-layout>
