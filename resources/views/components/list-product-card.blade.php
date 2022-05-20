<a class="product-card" href="{{ route('product.list', [$list->slug, $product->id]) }}">
    <div class="product">
        <div class="image">
            <img src="{{ url('/storage/' . $product->path) }}" alt="{{ $product->alt }}">
        </div>
        <div class="description">
            <h4>{{ $product->name }}</h4>
            <h5>{{ $product->shopName }}</h5>
            <h2>€ {{ $product->price }}</h2>
            @if ($product->order_id === null)
                <small>{{ __('Not yet purchased') }}</small>
            @else
                <small>{{ __('Purchased by') . ' ' . $product->contrName }} <i class="fa-solid fa-circle-check"></i></small>
            @endif
        </div>
    </div>
</a>
