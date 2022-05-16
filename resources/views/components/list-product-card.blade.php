<a class="product-card" href="{{ route('product.list') }}">
    <div class="product">
        <div class="image">
            <img src="{{ url('/storage/' . $product->path) }}" alt="{{ $product->alt }}">
        </div>
        <div class="description">
            <h4>{{ $product->name }}</h4>
            <h5>{{ $product->shopName }}</h5>
            <h2>€ {{ $product->price }}</h2>
            @if ($product->contributor_object === null)
                <small>{{ __('Not yet purchased') }}</small>
            @else
                <small>{{ __('Purchased by') }}</small>
            @endif
        </div>
    </div>
</a>
