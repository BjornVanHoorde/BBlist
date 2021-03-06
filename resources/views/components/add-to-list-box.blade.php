<div class="hide" id="choice-box">
    <div class="choice-box">
        <h2 class="text-center">{{ __('My lists') }}</h2>
        <form action="{{ route('product.add') }}" method="POST">
            @csrf

            @foreach ($lists as $list)
                <x-list-choice :list='$list'/>
            @endforeach

            <input type="hidden" name="product" value="{{ $product->id }}">

            <div class="button">
                <button type="submit">{{ __('Confirm') }}</button>
            </div>
            <div class="link text-center">
                <a id="cancel-choice">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</div>
