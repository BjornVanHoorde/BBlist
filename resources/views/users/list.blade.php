@extends('layouts.main')

@section('header')

    <x-static.header title="Home" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="">{{ __('Go back') }}</a>
    </div>

    <div class="banner">
        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
    </div>

    <div class="description text-center">
        <h4>Onze speciale kleine man zou graag wat spulletjes willen. Help je hem?</h4>
    </div>

    <div class="stats text-center">
        <h5>{{ __('There are') }} <span>2</span> {{ __('of the') }} <span>5</span> {{ __('products bought') }}</h5>
        <h5>{{ __('There is') }} <span>€ 11,18</span> {{ __('of the') }} <span>€ 27,95</span> {{ __('spend') }}</h5>
    </div>

    <div class="products">
        <a class="product-card" href="{{ route('product.shop') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.shop') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.shop') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.shop') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.shop') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                </div>
            </div>
        </a>

    </div>

@endsection
