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
<body class="font-figtree bg-dark-100 selection:bg-dark-600">
    <div class="flex flex-col">
        <x-header />
        <main class="h-full flex-grow bg-dark-100 text-white mb-auto">
            {{ $slot }}
        </main>
        <x-footer />
    </div>
</body>
</html>
