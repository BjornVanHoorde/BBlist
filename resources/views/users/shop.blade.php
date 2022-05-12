@extends('layouts.main')

@section('header')

    <x-static.header title="Home" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="button text-center">
        <a href="{{ route('categories') }}">{{ __('Categories') }}</a>
    </div>

    <div class="field">
        <div class="select">
            <label for="price">{{ __('Price') }}</label>
            <select name="price" id="price">
                <option value="low">{{ __('Low to high') }}</option>
                <option value="high">{{ __('High to low') }}</option>
            </select>
        </div>
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
