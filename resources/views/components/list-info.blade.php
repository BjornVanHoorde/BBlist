<div class="list-info">
    <div class="link bannerlink">
        <a href="{{ route('dashboard') }}">{{ __('Go back') }}</a>
    </div>

    <div class="banner">
        <img src="{{ url('storage/' . $list->image ) }}" alt="baby1.png">
    </div>

    <div class="description text-center">
        <h4>{{ $list->description }}</h4>
    </div>

    <div class="stats text-center">
        <h5>{{ __('There are') }} <span>{{ $amounts->boughtAmount }}</span> {{ __('of the') }} <span>{{ $amounts->totalAmount }}</span> {{ __('products bought') }}</h5>
        <h5>{{ __('There is') }} <span>€ {{ $amounts->boughtCost }}</span> {{ __('of the') }} <span>€ {{ $amounts->totalCost}}</span> {{ __('spend') }}</h5>
    </div>
</div>
