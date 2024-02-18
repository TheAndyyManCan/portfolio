<x-layout>
    @if($post)
        @if($post->pictures)
            <div class="w-96 h-96 mx-auto">
                <livewire:slideshow :pictures="$post->pictures" heightAndWidth=96 />
            </div>
        @endif
        <div class="mx-32 py-6 text-4xl font-bold font-mono text-center">
            {{ $project->title }}
        </div>
        <div class="mx-32">
            {!! $post->content !!}
        </div>
    @else
        <div class="mx-32 py-6 text-4xl font-bold font-mono text-center">
            {{ $project->title }}
        </div>
        <div class="text-center">
            Post coming soon!
        </div>
    @endif

</x-layout>
