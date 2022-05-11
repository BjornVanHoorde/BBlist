@extends('layouts.auth')

@section('content')

    <h1>{{ __('Log in') }}</h1>

    @if ($errors->any())
        <x-validation.errors :errors='$errors'/>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="field">
            <label for="email">{{ __('Email') }}</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <!-- Password -->
        <div class="field">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>
        </div>


        <div class="link text-right">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="button">
            <button type="submit">{{ __('Log In') }}</button>
        </div>
    </form>

    <div class="auth-bottom">
        <p>{{ __('No account yet?') }}</p>
        <div class="link">
            <a href="{{ route('register') }}">
                {{ __('Register here') }}
            </a>
        </div>
    </div>
@endsection
