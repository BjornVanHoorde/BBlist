@extends('layouts.main')

@section('header')

    <x-static.list-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link bannerlink">
        <a href="{{ route('dashboard') }}">{{ __('Go back') }}</a>
    </div>

    <x-list-info :list="$list" :amounts="$amounts"/>
    <x-list-link :list="$list"/>

    @if (count($products) > 0)
        <div class="products">
            @foreach ($products as $product)
                <x-list-product-card :product="$product" :list="$list"/>
            @endforeach
        </div>
    @else
        <div class="products">
            <h3 class="text-center">{{ __('There are no products on your list') }}</h3>
            <div class="button">
                <a class="text-center" href="{{ route('headCategories') }}">{{ __('Add some here') }}</a>
            </div>
        </div>
    @endif


    @if (session('status'))
    <x-validation.success/>
    @endif

@endsection
