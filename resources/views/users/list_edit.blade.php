@extends('layouts.main')

@section('header')

<x-static.list-header :title="$title" :gender="$list->gender" :slug="$list->slug"/>

@endsection

@section('menu')

    <x-static.menu />

@endsection

@section('content')

    <div class="link">
        <a href="{{ route('list', $list->slug) }}">{{ __('Go back') }}</a>
    </div>

    <form action="{{ route('list.change', $list->slug) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
            <x-validation.errors :errors='$errors'/>
        @endif

        <div class="field">
            <label for="nameOfChild">{{ __('Name of the child') }}</label>
            <input type="text" id="nameOfChild" name="nameOfChild" value="{{ $list->name }}" required>
        </div>

        <div class="field">
            <label for="genderOfChild">{{ __('Gender of the child') }}</label>
            <div class="radio-container">
                <div class="radio">
                    <label for="boy">{{ __('Boy') }}</label>
                    <input type="radio" name="genderOfChild" id="boy" value="boy" required @if ($list->gender === 'boy') checked @endif>
                </div>
                <div class="radio">
                    <label for="girl">{{ __('Girl') }}</label>
                    <input type="radio" name="genderOfChild" id="girl" value="girl" required @if ($list->gender === 'girl') checked @endif>
                </div>
                <div class="radio">
                    <label for="neutral">{{ __('Neutral') }}</label>
                    <input type="radio" name="genderOfChild" id="neutral" value="neutral" required @if ($list->gender === 'neutral') checked @endif>
                </div>
            </div>
        </div>

        <div class="field">
            <label for="description">{{ __('Description') }}</label>
            <textarea name="description" id="description" cols="30" rows="8" required>{{ $list->description  }}</textarea>
        </div>

        <div class="field">
            <label for="photoChild">{{ __('Photo of the child') }}</label>
            <label for="photoChild"><small>{{ __('Leave this empty if you don\'t want to change the image') }}</small></label>
            <input type="file" id="photoChild" name="photoChild" value="{{ url('/storage/' . $list->image) }}">
        </div>

        <div class="button">
            <button type="submit">{{ __('Edit list') }}</button>
        </div>

    </form>

    <div class="link text-center">
        <a id="choice-btn">{{ __('Delete list') }}</a>
    </div>

    <x-confirmation-box :list="$list" />


@endsection
