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

                <div class="list boy">
                    <a href="">
                        Jonas
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </a>
                </div>

                <div class="list girl">
                    <a href="">
                        Jonas
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </a>
                </div>

                {{-- <div class="list girl">
                    <a href="">
                        Jonas
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </a>
                </div>

                <div class="list neutral">
                    <a href="">
                        Jonas
                        <img src="{{ URL::asset('assets/baby1.jpg') }}" alt="baby1.png">
                    </a>
                </div> --}}

            </div>
        </div>

    </div>


@endsection
