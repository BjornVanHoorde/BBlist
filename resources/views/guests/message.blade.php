@extends('layouts.guest-main')

@section('header')

    <x-static.guest-cart-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection

@section('content')

    <div class="link">
        <a href="">{{ __('Go back') }}</a>
    </div>

    <div class="message-container">
        <h2 class="text-center">{{ __('Leave a message to the parents') }}</h2>

        <form method="GET" action="{{ route('checkout', $list->slug) }}">

            @if ($errors->any())
                <x-validation.errors :errors='$errors'/>
            @endif

            <div class="field">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
            </div>

            <div class="field">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <!-- Password -->
            <div class="field">
                <label for="message">{{ __('Message') }}</label>
                <textarea name="message" id="message" cols="30" rows="8" required></textarea>
            </div>

            <div class="amount">
                <h3>{{ __('Amount:') . ' € ' . $total}}</h3>
            </div>

            <div class="button">
                <button>{{ __('Pay') }}</button>
            </div>
        </form>
    </div>



@endsection
