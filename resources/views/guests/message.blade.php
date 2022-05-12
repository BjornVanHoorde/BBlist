@extends('layouts.guest-main')

@section('header')

    <x-static.guest-header title="Home" />

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

        <div class="button">
            <button type="submit">{{ __('Go to payment') }}</button>
        </div>
    </form>

    <div class="link text-center">
        <a href="">{{ __('Buy another product') }}</a>
    </div>


@endsection
