@extends('layouts.guest-main')

@section('header')

    <x-static.guest-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection


@section('content')

    <div class="success-container">
        <div class="text text-center">
            <h1><i class="fa-solid fa-circle-check fa-2x"></i></h1>
            <h2>{{ __('The payment was successful.') }}</h2>
            <h2>{{ __('The parents of ') . $list->name . __(' are gratefull')}}</h2>
        </div>

        <div class="link text-center">
            <a href="{{ route('guests.list', $list->slug) }}">{{ __('Go back to the list') }}</a>
        </div>
    </div>

@endsection
