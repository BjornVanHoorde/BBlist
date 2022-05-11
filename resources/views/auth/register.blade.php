@extends('layouts.auth')

@section('content')

    <h1>{{ __('Register') }}</h1>

    @if ($errors->any())
        <x-validation.errors :errors='$errors'/>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First name -->
        <div class="field">
            <label for="firstName">{{ __('First name') }}</label>
            <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
        </div>

        <!-- Last name -->
        <div class="field">
            <label for="lastName">{{ __('Last name') }}</label>
            <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" required>
        </div>

        <!-- Username-->
        <div class="field">
            <label for="username">{{ __('Username') }}</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>
        </div>

        <!-- Email Address -->
        <div class="field">
            <label for="email">{{ __('Email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <!-- Password -->
        <div class="field">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>
        </div>

        <!-- Confirm Password -->
        <div class="field">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
        </div>

        <div class="button">
            <button type="submit">{{ __('Register') }}</button>
        </div>

        <div class="auth-bottom">
            <p>{{ __('Already registered?') }}</p>
            <div class="link">
                <a href="{{ route('login') }}">
                    {{ __('Login here') }}
                </a>
            </div>
        </div>
    </form>
@endsection
