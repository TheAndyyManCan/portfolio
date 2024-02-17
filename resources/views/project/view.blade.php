<x-layout>
    <div class="mx-32 py-6 text-4xl uppercase font-bold text-center">
        {{ $project->title }}
    </div>
    @if($post)
        <div class="mx-32">
            {!! $post->content !!}
        </div>
    @else
        <div class="text-center">
            Post coming soon!
        </div>
    @endif

</x-layout>
