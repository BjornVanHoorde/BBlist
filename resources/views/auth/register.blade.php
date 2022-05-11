<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- First name -->
        <div>
            <label for="firstName">{{ __('First name') }}</label>
            <input type="text" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
        </div>

        <!-- Last name -->
        <div>
            <label for="lastName">{{ __('Last name') }}</label>
            <input type="text" id="lastName" name="lastName" value="{{ old('lastName') }}" required>
        </div>

        <!-- Username-->
        <div>
            <label for="username">{{ __('Username') }}</label>
            <input type="text" id="username" name="username" value="{{ old('username') }}" required>
        </div>

        <!-- Email Address -->
        <div>
            <label for="email">{{ __('Email') }}</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <!-- Password -->
        <div>
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>
        </div>

        <!-- Confirm Password -->
        <div>
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required>
        </div>

        <div>
            <a href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit">{{ __('Register') }}</button>
        </div>
    </form>

</body>
</html>
