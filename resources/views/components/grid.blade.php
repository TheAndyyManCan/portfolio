@props(['panels'])
<div class="grid grid-cols-3">
    @foreach($panels as $panel)
        <div class="font-semibold">{{ $panel->title }}</div>
        <div class="text-sm">{{ $panel->text }}</div>
    @endforeach
</div>
