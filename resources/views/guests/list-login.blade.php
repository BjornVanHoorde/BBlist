@extends('layouts.auth')

@section('content')

    <h1>Lijst Jonas</h1>

    @if ($errors->any())
        <x-validation.errors :errors='$errors'/>
    @endif

    <form method="POST" action="">
        @csrf

        <p>{{ __('Fill in the password you have received from the parents to access the list') }}</p>

        <!-- Password -->
        <div class="field">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>
        </div>

        <div class="button">
            <button type="submit">{{ __('Get access') }}</button>
        </div>
    </form>

@endsection
