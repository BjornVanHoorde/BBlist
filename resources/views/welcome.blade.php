<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Laravel</title>
    </head>
    <body class="test">
        <h1>Testjen wh</h1>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                {{ __('Log Out') }}
            </a>
        </form>

    </body>
</html>
