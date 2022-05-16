<div class="checkbox {{ $list->gender }}">
    <label for="{{ $list->name }}">{{ $list->name }}</label>
    <input type="checkbox" id="{{ $list->name }}" name="lists[]" value="{{ $list->name }}">
</div>
