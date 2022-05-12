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

    @yield('header')

    <div class="user-container">
        @yield('content')
    </div>

    <script src="https://kit.fontawesome.com/c552aa0d75.js" crossorigin="anonymous"></script>
</body>
</html>
