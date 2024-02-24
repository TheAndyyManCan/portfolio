<x-layout>
    <div class="mx-32 py-16 text-5xl font-extrabold text-center">
        {{ $posts['Headline']->content }}
    </div>
    <div class="lg:flex justify-items-center 2xl:mx-80 md:mx-32 mx-8 py-6">
        <div class="">
            <livewire:slideshow :pictures="$posts['Homepage-About']->pictures" heightAndWidth=96 />
        </div>
        <div class="p-16 text-center mx-8 bg-dark-200 rounded-xl">
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
