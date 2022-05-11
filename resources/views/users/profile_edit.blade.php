@extends('layouts.main')

@section('header')

    <x-static.header title="Home" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <form action="">

        <div class="field">
            <label for="firstName">{{ __('First name') }}</label>
            <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
        </div>

        <div class="field">
            <label for="lastName">{{ __('Last name') }}</label>
            <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" required>
        </div>

        <div class="field">
            <label for="username">{{ __('Username') }}</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>
        </div>

        <div class="field">
            <label for="email">{{ __('Email') }}</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="button">
            <button type="submit">{{ __('Edit profile') }}</button>
        </div>

    </form>

@endsection
