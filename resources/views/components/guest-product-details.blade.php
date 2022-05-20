<div class="product-detail">
    <img src="{{ url('storage/' . $product->path) }}" alt="{{ $product->alt }}">

    <h2 class="text-right">€ {{ $product->price }}</h2>

    <h3>{{ $product->name }}</h3>
    <h5>{{ __('Offered by') . ' ' . $product->shopName }}</h5>

    <p>{{ $product->description }}</p>

    <form action="{{ route('guest.product.list.add', $list->slug) }}" method="POST">
        @csrf
        <input type="hidden" name="product" value="{{ $product->id }}">
        <input type="hidden" name="list" value="{{ $list->slug }}">
        <div class="button">
            <button type="submit">{{ __('Add to cart') }}</button>
        </div>
    </form>

    <div class="link text-center">
        <a target="_blank" href="{{ url($product->url) }}">{{ __('Check out this product on the official website') }}</a>
    </div>
</div>

