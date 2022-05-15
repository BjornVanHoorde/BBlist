<a class="product-card" href="{{ route('product.shop', $product->id) }}">
    <div class="product">
        <div class="image">
            <img src="{{ url('storage/' . $product->path) }}" alt="{{ $product->alt }}">
        </div>
        <div class="description">
            <h4>{{ $product->name }}</h4>
            <h5>{{ $product->shopName }}</h5>
            <h2>€ {{ $product->price }}</h2>
        </div>
    </div>
</a>
