<div class="product-detail">
    <img src="{{ url('/storage/' . $product->path) }}" alt="truck.png">

    @if ($product->order_id === null)
        <h4 class="text-center">{{ __('Not yet purchased') }}</h4>
    @else
        <h4 class="text-center">{{ __('Purchased by') . ' ' . $product->contrName }}</h4>
        <h4>{{ __('Message:') }}</h4>
        <p class="italic text-center">{{ $product->message }}</p>
    @endif

    <h2 class="text-right">€ {{ $product->price }}</h2>

    <h3>{{ $product->name }}</h3>
    <h5>{{ __('Offered by') }} Baby Corner</h5>

    <p>{{ $product->description }}</p>

    @if ($product->order_id === null)
        <form action="{{ route('product.list.delete') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" name="product" value="{{ $product->id }}">
            <input type="hidden" name="list" value="{{ $list->id }}">
            <div class="button">
                <button type="submit">{{ __('Delete this product') }}</button>
            </div>
        </form>
    @else
        <div class="button">
            <button disabled="disabled">{{ __('This product is already bought') }}</button>
        </div>
    @endif

    <div class="link text-center">
        <a href="">{{ __('Check out this product on the official website') }}</a>
    </div>
</div>
