@props(['title'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Andy McDonald - Portfolio' }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-header />
    {{ $slot }}
</body>
</html>
