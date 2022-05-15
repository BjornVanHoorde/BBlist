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

    <x-product-details :product='$product' />

    <x-add-to-list-box :lists='$lists' :product='$product' />

@endsection
