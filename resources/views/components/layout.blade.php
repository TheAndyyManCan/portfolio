@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Andy McDonald - Portfolio' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col overflow-hidden">
        <x-header />
        <main class="h-screen overflow-y-scroll flex-grow">
            {{ $slot }}
        </main>
        <x-footer />
    </div>
</body>
</html>
