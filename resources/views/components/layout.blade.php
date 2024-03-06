@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Andy McDonald - Portfolio' }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body class="font-figtree selection:bg-dark-600 overflow-y-scroll">
    <div class="flex flex-col overflow-hidden">
        <x-header />
        <main class="h-screen flex-grow bg-dark-100 text-white overflow-visible">
            {{ $slot }}
        </main>
        <x-footer />
    </div>
</body>
</html>
