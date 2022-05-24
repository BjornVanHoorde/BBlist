@extends('layouts.main')

@section('header')

    <x-static.header :title="$title" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="{{ route('categories', $headCategory) }}">{{ __('Go back') }}</a>
    </div>


    @if (count($products) <= 0)
        <h3 class='text-center' >{{ __('There are no products available at the moment') }}</h3>
    @endif

    @if (count($products) > 0)
    <p class='text-center' >{{ count($products) . ' ' . __('products') }}</p>

    <form class="filter" action="{{ route('shop', $category) }}">
        <div class="field">
            <div class="select">
                <label for="filter">{{ __('Filter') }}</label>
                <select name="filter" id="filter">
                    <option value=""> - </option>
                    <option value="low" @if ($filter === 'low') selected @endif>{{ __('Low to high') }}</option>
                    <option value="high" @if ($filter === 'high') selected @endif>{{ __('High to low') }}</option>
                </select>
            </div>
        </div>
        <div class="button">
            <button type="submit">{{ __('Search') }}</button>
        </div>
    </form>

        <div class="products">

            @foreach ($products as $product)
                <x-shop-product-card :product='$product'/>
            @endforeach

        </div>
    @endif


@endsection
