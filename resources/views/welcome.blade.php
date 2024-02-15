<x-layout>
    <div class="mx-32 py-6 text-5xl uppercase font-extrabold text-center">
        {{ $posts['Headline']->content }}
    </div>
    <div class="flex md:mx-32 mx-8 py-6">
        <div class="md:w-2/3 w-full p-2 mx-auto">
            {!! $posts['Homepage-About']->content !!}
        </div>
    </div>
    <x-sub-heading>Skills</x-sub-heading>
    <x-content-grid :content="$skills" type="skill" />
    <x-sub-heading>Education</x-sub-heading>
    <x-content-grid :content="$education" type="education" class="!grid-cols-2 lg:mx-64" />
    <x-sub-heading>Featured Projects</x-sub-heading>
    <x-content-grid :content="$projects" type="project" class="!grid-cols-3 lg:mx-48" />
</x-layout>
