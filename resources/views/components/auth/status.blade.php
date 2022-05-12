@props(['status'])

@if ($status)
    <div class="flash success">
        {{ $status }}
    </div>
@endif
