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
        <label for="nameOfChild">{{ __('Name of the child') }}</label>
        <input type="text" id="nameOfChild" name="nameOfChild" value="{{ old('nameOfChild') }}" required>
    </div>

    <div class="field">
        <label for="description">{{ __('Description') }}</label>
        <textarea name="description" id="description" cols="30" rows="8" required>{{ old('description') }}</textarea>
    </div>

    <div class="field">
        <label for="photoChild">{{ __('Photo of the child') }}</label>
        <input type="file" id="photoChild" name="photoChild" value="{{ old('photoChild') }}" required>
    </div>

    <div class="field">
        <label for="password">{{ __('Password of the list') }}</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}" required>
    </div>

    <div class="field">
        <label for="password_confirmation">{{ __('Confirm Password') }}</label>
        <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
    </div>

    <p class="text-center">{{ __('ATTENTION! This password is for accessing the list. Those who you want to invite, will need this password. Don\'t choose a personal password.') }}</p>

    <div class="button">
        <button type="submit">{{ __('Make list') }}</button>
    </div>

</form>


@endsection
