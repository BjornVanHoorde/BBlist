@extends('layouts.main')

@section('header')

    <x-static.header title="Home" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <h1 class="text-center">{{ __('Categories') }}</h1>

    <div class="categories">
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/toys.png') }}" alt="toys.png">
            <a href="">{{ __('Toys') }}</a>
        </div>
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/clothes-hanger.png') }}" alt="clothes-hanger.png">
            <a href="">{{ __('Clothes') }}</a>
        </div>
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/sleep.png') }}" alt="sleep.png">
            <a href="">{{ __('Sleep') }}</a>
        </div>
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/healthcare.png') }}" alt="healthcare.png">
            <a href="">{{ __('Care') }}</a>
        </div>
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/shield.png') }}" alt="shield.png">
            <a href="">{{ __('Safety') }}</a>
        </div>
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/school.png') }}" alt="school.png">
            <a href="">{{ __('School') }}</a>
        </div>
        <div class="menu-button category">
            <img src="{{ URL::asset('assets/categories/signpost.png') }}" alt="signpost.png">
            <a href="">{{ __('On the way') }}</a>
        </div>
    </div>

@endsection
