@extends('layouts.main')

@section('header')

    <x-static.header :title='$title' />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    @if ($categories)
        <div class="link">
            <a href="{{ route('headCategories') }}">{{ __('Go back') }}</a>
        </div>
    @endif

    <div class="categories">
        @if ($headCategories)
            @foreach ($headCategories as $category)
                <x-head-category-button :category='$category' />
            @endforeach
        @endif
        @if ($categories)
            @foreach ($categories as $category)
                <x-category-button :category='$category' />
            @endforeach
        @endif
    </div>

@endsection
