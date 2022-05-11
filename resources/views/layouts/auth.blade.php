<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="UTF-8">
  <title>BBlist</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://use.typekit.net/plh4gjz.css">
  <meta class="foundation-mq">
</head>

<body>

    @include('components.auth.banner-logo')

    <div class="auth-container">
        @yield('content')
    </div>

</body>
</html>
