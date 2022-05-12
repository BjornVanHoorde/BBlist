@extends('layouts.main')

@section('header')

    <x-static.header title="Home" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="dashboard-container">

        <div class="shop-button">
            <a href="{{ route('categories') }}">
                {{ __('Go to') }} <br>
                {{ __('shop') }}
            </a>
        </div>

        <div class="list-container">
            <h2>{{ __('My lists') }}</h2>

            <div class="lists">

                <a href="">
                    <div class="list boy">
                        <h3>Jonas</h3>
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </div>
                </a>

                <a href="">
                    <div class="list girl">
                        <h3>Jonas</h3>
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </div>
                </a>

                <a href="">
                    <div class="list boy">
                        <h3>Jonas</h3>
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </div>
                </a>

                <a href="">
                    <div class="list neutral">
                        <h3>Jonas</h3>
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </div>
                </a>

            </div>
        </div>

        <div class="button add">
            <a class="text-center" href=""><i class="fa-solid fa-plus"></i></a>
        </div>

    </div>


@endsection
