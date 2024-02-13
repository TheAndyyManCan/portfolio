@props(['header'])

<section class="py-8 max-w-4xl mx-auto">
    <h1 class="text-lg font-bold mb-4 border-b py-2">
        {{ $header }}
    </h1>

    <div class="flex">
        <x-panel class="mr-3">
            <aside class="w-48">
                <ul>
                    <x-admin-link link="/admin" text="Dashboard" />
                    <x-admin-link link="/admin/skills" text="Manage Skills" />
                    <x-admin-link link="/admin/education" text="Manage Education" />
                    <x-admin-link link="/admin/project" text="Manage Projects" />
                </ul>
            </aside>
        </x-panel>

        <main class="flex-1">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>
</section>
