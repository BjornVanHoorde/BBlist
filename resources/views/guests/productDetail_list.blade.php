@extends('layouts.guest-main')

@section('header')

    <x-static.guest-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection


@section('content')

    <div class="link">
        <a href="{{ route('guests.list', $list->slug) }}">{{ __('Go back') }}</a>
    </div>

    <x-guest-product-details :product='$product' :list="$list"/>

    @if (session('status'))
    <x-validation.success/>
    @endif

@endsection
