<a class="product-card" href="{{ route('guest.product.list', [$list->slug, $product->id]) }}">
    <div class="product">
        <div class="image">
            <img src="{{ url('storage/' . $product->path) }}" alt="{{ $product->alt }}">
        </div>
        <div class="description">
            <h4>{{ $product->name }}</h4>
            <h5>{{ $product->shopName }}</h5>
            <h2>€ {{ $product->price }}</h2>
            <form action="{{ route('guest.shoppingcart.delete') }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="hidden" name="product" value="{{ $product->id }}">
                <input type="hidden" name="list" value="{{ $list->slug }}">
                <button type="submit"><i class="fa-solid fa-x fa-2x"></i></button>
            </form>
        </div>
    </div>
</a>
