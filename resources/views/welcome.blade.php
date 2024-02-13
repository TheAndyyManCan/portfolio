<x-layout>
    <div class="mx-32 py-6 text-5xl uppercase font-extrabold text-center">
        Excellence, Integrity, Occasional Lateness
    </div>
    <div class="flex md:mx-32 mx-8 py-6">
        <div class="md:w-2/3 w-full p-2 mx-auto">
            <p>
                My name is Andy McDonald. I am a software engineer with a particular interest in back end web development using frameworks such as Laravel. I have recently completed my third year at the University of the Highlands and Islands, achieving a BSc in Computing (Software Engineering) with a distinction, and I am currently in 4th year on course to achieve my honours.
            </p><br />
            <p>
                To be perfectly honest, I wasn't 100% sure what I wanted to do with my life until the COVID pandemic hit in 2020 and I finally took the plunge to apply to university to study computing. Since then, I have discovered a passion hidden away in my tendency to tinker, perfect and explore computer systems my entire life: Software Engineering.
            </p><br />
            <p>
                I can't tell you how much I appreciate you taking the time to view my portfolio. Feel free to look around and find out more about me and my passion.
            </p>
        </div>
    </div>
    <x-sub-heading>Skills</x-sub-heading>
    <x-content-grid :content="$skills" type="skill" />
    <x-sub-heading>Education</x-sub-heading>
    <x-content-grid :content="$education" type="education" class="!grid-cols-2 lg:mx-64" />
    <x-sub-heading>Featured Projects</x-sub-heading>
    <x-content-grid :content="$projects" type="project" class="!grid-cols-3 lg:mx-48" />
</x-layout>
