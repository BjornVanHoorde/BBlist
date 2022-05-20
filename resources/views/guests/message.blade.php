@extends('layouts.guest-main')

@section('header')

    <x-static.guest-cart-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection

@section('content')

    <div class="link">
        <a href="">{{ __('Go back') }}</a>
    </div>

    <h2>{{ __('Leave a message to the parents') }}</h2>

    <form method="POST" action="">
        @csrf

        <div class="field">
            <label for="name">{{ __('Name') }}</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <!-- Password -->
        <div class="field">
            <label for="message">{{ __('Message') }}</label>
            <textarea name="message" id="message" cols="30" rows="8"></textarea>
        </div>

        <h3>{{ __('Amount:') . ' € ' . $total}}</h3>

        <div class="button">
            <button type="submit">{{ __('Pay') }}</button>
        </div>
    </form>



@endsection
