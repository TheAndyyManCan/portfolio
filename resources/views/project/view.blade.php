<x-layout>
    @if($post)
        @if($post->pictures)
            <div class="w-96 h-96 mx-auto">
                <livewire:slideshow :pictures="$post->pictures" heightAndWidth=96 />
            </div>
        @endif
        <div class="mx-32 py-6 text-4xl font-bold text-center">
            {{ $project->title }}
        </div>
        <div class="mx-8 lg:w-2/3 lg:mx-auto bg-dark-200 rounded-xl p-6">
            {!! $post->content !!}
        </div>
    @else
        <div class="mx-32 py-6 text-4xl font-bold text-center">
            {{ $project->title }}
        </div>
        <div class="text-center">
            Post coming soon!
        </div>
    @endif

</x-layout>
