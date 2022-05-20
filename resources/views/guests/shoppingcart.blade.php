@extends('layouts.guest-main')

@section('header')

    <x-static.guest-cart-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection


@section('content')

        @if (count($products) > 0)
            <div class="products">
                @foreach ($products as $product)
                    <x-guest-product-card :product="$product" :list="$list"/>
                @endforeach
            </div>

            <div class="info">
                <h3 class="text-center">{{ __('Total:') . ' € ' . $total }}</h3>
            </div>

            <div class="button text-center">
                <a href="{{ route('guest.message', $list->slug) }}">{{ __('Go to payment') }}</a>
            </div>

        @else

            <h2 class="text-center">{{ __('There are no products in your cart') }}</h2>

        @endif



@endsection
