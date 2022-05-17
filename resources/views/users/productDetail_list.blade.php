@extends('layouts.main')

@section('header')

<x-static.list-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="{{ route('list', $list->slug) }}">{{ __('Go back') }}</a>
    </div>

    <x-product-details-list :product="$product" :list="$list"/>

@endsection
