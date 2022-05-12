@extends('layouts.auth')

@section('content')

    <h1>{{ __('Forgot password') }}</h1>

    <x-auth.status class="mb-4" :status="session('status')" />


    @if ($errors->any())
        <x-validation.errors :errors='$errors'/>
    @endif


    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <p>Fill in your email and we will send you a link to reset your password</p>

        <!-- Email Address -->
        <div class="field">
            <label for="email">{{ __('Email') }}</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="button">
            <button type="submit">{{ __('Send Reset Link') }}</button>
        </div>
    </form>


    <div class="auth-bottom">
        <div class="link">
            <a href="{{ route('login') }}">
                {{ __('Go back') }}
            </a>
        </div>
    </div>

@endsection
