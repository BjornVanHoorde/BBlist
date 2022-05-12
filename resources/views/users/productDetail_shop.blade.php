@extends('layouts.main')

@section('header')

    <x-static.header title="Home" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="">{{ __('Go back') }}</a>
    </div>

    <div class="product-detail">
        <img src="{{ URL::asset('assets/truck.jpg') }}" alt="truck.png">

        <h2 class="text-right">€ 5,59</h2>

        <h3>Gele vrachtwagen</h3>
        <h5>{{ __('Offered by') }} Baby Corner</h5>

        <p>Deze mooie gele vrachtwagen is speciaal ontworpen om maximaal plezier uit de belevenis te halen. Uw kind zal hier urenlang plezier mee beleven. Naast de unieke kwaliteit, is het ook nog eens milieuvriendelijk...………….</p>

        <div class="button">
            <button id="add-to-list">{{ __('Add to list') }}</button>
        </div>

        <div class="link text-center">
            <a href="">{{ __('Check out this product on the official website') }}</a>
        </div>
    </div>

    <div class="hide" id="list-choices">
        <div class="list-choice">
            <h2 class="text-center">{{ __('My lists') }}</h2>
            <form action="">
                <div class="checkbox boy">
                    <label for="jonas">Jonas</label>
                    <input type="checkbox" id="jonas" name="jonas">
                </div>
                <div class="checkbox girl">
                    <label for="marie">Marie</label>
                    <input type="checkbox" id="marie" name="marie">
                </div>
                <div class="checkbox boy">
                    <label for="bram">Bram</label>
                    <input type="checkbox" id="bram" name="bram">
                </div>
                <div class="checkbox neutral">
                    <label for="sam">Sam</label>
                    <input type="checkbox" id="sam" name="sam">
                </div>
                <div class="button">
                    <button>{{ __('Confirm') }}</button>
                </div>
                <div class="link text-center">
                    <a id="cancel-choice">{{ __('Cancel') }}</a>
                </div>
            </form>
        </div>
    </div>

@endsection
