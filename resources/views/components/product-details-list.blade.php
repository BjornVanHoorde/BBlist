<div class="product-detail">
    <img src="{{ url('/storage/' . $product->path) }}" alt="truck.png">

    <h4 class="text-center">{{ __('Not yet purchased') }}</h4>
    {{-- <h4 class="text-center">{{ __('Purchased by') }}  JoniVH</h4>
    <p class="italic">Heel leuk speeltje. Ik had vroeger iets in die geest dus daarom dat ik deze gekocht heb. Hopelijk heeft Jonas er veel plezier mee. Heel veel groetjes Joni Van Hoorde</p> --}}

    <h2 class="text-right">€ {{ $product->price }}</h2>

    <h3>{{ $product->name }}</h3>
    <h5>{{ __('Offered by') }} Baby Corner</h5>

    <p>{{ $product->description }}</p>

    <form action="{{ route('product.list.delete') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="product" value="{{ $product->id }}">
        <input type="hidden" name="list" value="{{ $list->id }}">
        <div class="button">
            <button type="submit">{{ __('Delete this product') }}</button>
        </div>
    </form>

    <div class="link text-center">
        <a href="">{{ __('Check out this product on the official website') }}</a>
    </div>
</div>
