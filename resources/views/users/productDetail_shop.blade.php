@extends('layouts.main')

@section('header')

    <x-static.header :title="$title" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="{{ URL::previous() }}">{{ __('Go back') }}</a>
    </div>

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

    <div class="hide" id="list-choices">
        <div class="list-choice">
            <h2 class="text-center">{{ __('My lists') }}</h2>
            <form action="">
                <div class="checkbox boy">
                    <label for="jonas">Jonas</label>
                    <input type="checkbox" id="jonas" name="jonas">
                </div>
                <div class="checkbox girl">
                    <label for="marie">Marie</label>
                    <input type="checkbox" id="marie" name="marie">
                </div>
                <div class="checkbox boy">
                    <label for="bram">Bram</label>
                    <input type="checkbox" id="bram" name="bram">
                </div>
                <div class="checkbox neutral">
                    <label for="sam">Sam</label>
                    <input type="checkbox" id="sam" name="sam">
                </div>
                <div class="button">
                    <button>{{ __('Confirm') }}</button>
                </div>
                <div class="link text-center">
                    <a id="cancel-choice">{{ __('Cancel') }}</a>
                </div>
            </form>
        </div>
    </div>

@endsection
