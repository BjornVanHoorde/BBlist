@extends('layouts.guest-main')

@section('header')

    <x-static.guest-header title="Home" />

@endsection

@section('content')

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
        <a class="product-card" href="{{ route('product.list') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                    <small>{{ __('Not yet purchased') }}</small>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.list') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                    <small>JoniVH <i class="fa-solid fa-circle-check fa-xl"></i></small>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.list') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                    <small>{{ __('Not yet purchased') }}</small>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.list') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                    <small>JoniVH <i class="fa-solid fa-circle-check fa-xl"></i></small>
                </div>
            </div>
        </a>

        <a class="product-card" href="{{ route('product.list') }}">
            <div class="product">
                <div class="image">
                    <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.jpg">
                </div>
                <div class="description">
                    <h4>Gele vrachtwagen</h4>
                    <h5>Baby Corner</h5>
                    <h2>€ 5,59</h2>
                    <small>{{ __('Not yet purchased') }}</small>
                </div>
            </div>
        </a>

    </div>

@endsection
