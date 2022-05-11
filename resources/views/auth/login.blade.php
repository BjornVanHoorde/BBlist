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

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email">{{ __('Email') }}</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" value="{{ old('password') }}" required>
        </div>


        <div >
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <a href="{{ route('register') }}">
                {{ __('No account yet?') }}
            </a>

            <button type="submit">{{ __('Login') }}</button>
        </div>
    </form>

</body>
</html>
