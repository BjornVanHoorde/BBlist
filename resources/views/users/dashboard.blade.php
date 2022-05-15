@extends('layouts.main')

@section('header')

    <x-static.header :title="$title" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="dashboard-container">

        <div class="shop-button">
            <a href="{{ route('headCategories') }}">
                {{ __('Go to') }} <br>
                {{ __('shop') }}
            </a>
        </div>

        <div class="list-container">
            <h2>{{ __('My lists') }}</h2>

            @if (count($lists) <= 0)
                <p class='text-center'>{{ __('You haven\'t got any lists yet') }}<p/>
            @endif

            <div class="lists">

                @foreach ($lists as $list)
                    <a href="">
                        <div class="list {{ $list->gender }}">
                            <h3>{{ $list->name }}</h3>
                            <img src="{{ url('storage/' . $list->image) }}" alt="{{ $list->name . '.png' }}">
                        </div>
                    </a>
                @endforeach

            </div>
        </div>

        <div class="button add">
            <a class="text-center" href="{{ route('list.new') }}"><i class="fa-solid fa-plus"></i></a>
        </div>

    </div>


@endsection
