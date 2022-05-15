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


    @if (count($products) <= 0)
        <h3 class='text-center' >{{ __('There are no products available at the moment') }}</h3>
    @endif

    @if (count($products) > 0)
    <p class='text-center' >{{ count($products) . ' ' . __('products') }}</p>
        <div class="field">
            <div class="select">
                <label for="price">{{ __('Price') }}</label>
                <select name="price" id="price">
                    <option value=""> - </option>
                    <option value="low">{{ __('Low to high') }}</option>
                    <option value="high">{{ __('High to low') }}</option>
                </select>
            </div>
        </div>
        <div class="products">

            @foreach ($products as $product)
                <x-shop-product-card :product='$product'/>
            @endforeach

        </div>
    @endif


@endsection
