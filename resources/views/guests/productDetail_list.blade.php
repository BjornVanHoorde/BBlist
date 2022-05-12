@extends('layouts.guest-main')

@section('header')

    <x-static.guest-header title="Home" />

@endsection


@section('content')

    <div class="link">
        <a href="">{{ __('Go back') }}</a>
    </div>

    <div class="product-detail">
        <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.png">

        <h4 class="text-center">{{ __('Not yet purchased') }}</h4>
        {{-- <h4 class="text-center">{{ __('Purchased by') }}  JoniVH</h4>
        <p class="italic">Heel leuk speeltje. Ik had vroeger iets in die geest dus daarom dat ik deze gekocht heb. Hopelijk heeft Jonas er veel plezier mee. Heel veel groetjes Joni Van Hoorde</p> --}}

        <h2 class="text-right">€ 5,59</h2>

        <h3>Gele vrachtwagen</h3>
        <h5>{{ __('Offered by') }} Baby Corner</h5>

        <p>Deze mooie gele vrachtwagen is speciaal ontworpen om maximaal plezier uit de belevenis te halen. Uw kind zal hier urenlang plezier mee beleven. Naast de unieke kwaliteit, is het ook nog eens milieuvriendelijk...………….</p>

        <div class="button">
            <button>{{ __('Buy this product') }}</button>
        </div>

        <div class="link text-center">
            <a href="">{{ __('Check out this product on the official website') }}</a>
        </div>
    </div>

@endsection
