<div class="hide" id="choice-box">
    <div class="choice-box">
        <h2 class="text-center">{{ __('Are you sure?') }}</h2>
        <form action="{{ route('list.delete') }}" method="POST">
            @csrf
            @method('DELETE')

            <input type="hidden" name="list" value="{{ $list->id }}">

            <div class="button">
                <button type="submit">{{ __('Confirm') }}</button>
            </div>
            <div class="link text-center">
                <a id="cancel-choice">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</div>
