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

    <div class="products">
        @foreach ($products as $product)
            <x-list-product-card :product="$product" :list="$list"/>
        @endforeach
    </div>

@endsection
