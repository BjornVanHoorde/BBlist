@extends('layouts.main')

@section('header')

    <x-static.header :title="$title" />

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="{{ route('dashboard') }}">{{ __('Go back') }}</a>
    </div>

    <form action="{{ route('profile.change') }}" method="POST">
        @csrf

        @if ($errors->any())
            <x-validation.errors :errors='$errors'/>
        @endif

        <div class="field">
            <label for="firstName">{{ __('First name') }}</label>
            <input type="text" id="firstName" name="firstName" value="{{ $user->first_name }}" required>
        </div>

        <div class="field">
            <label for="lastName">{{ __('Last name') }}</label>
            <input type="text" id="lastName" name="lastName" value="{{ $user->last_name }}" required>
        </div>

        <div class="field">
            <label for="username">{{ __('Username') }}</label>
            <input type="text" id="username" name="username" value="{{ $user->username }}" required>
        </div>

        <div class="field">
            <label for="email">{{ __('Email') }}</label>
            <input type="text" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <div class="button">
            <button type="submit">{{ __('Edit profile') }}</button>
        </div>

    </form>

@endsection
