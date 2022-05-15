<div class="product-detail">
    <img src="{{ url('storage/' . $product->path) }}" alt="{{ $product->alt }}">

    <h2 class="text-right">€ {{ $product->price }}</h2>

    <h3>{{ $product->name }}</h3>
    <h5>{{ __('Offered by') . ' ' . $product->shopName }}</h5>

    <p>{{ $product->description }}</p>

    <div class="button">
        <button id="add-to-list">{{ __('Add to list') }}</button>
    </div>

    <div class="link text-center">
        <a target="_blank" href="{{ url($product->url) }}">{{ __('Check out this product on the official website') }}</a>
    </div>
</div>
