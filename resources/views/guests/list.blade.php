@extends('layouts.guest-main')

@section('header')

    <x-static.guest-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection

@section('content')

        <x-list-info :list="$list" :amounts='$amounts' />

    <div class="products">

        @foreach ($products as $product)
            <x-guest-list-product-card :product="$product" :list="$list"/>
        @endforeach

    </div>

@endsection
