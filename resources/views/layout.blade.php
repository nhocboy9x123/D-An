<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Neotech-Administrator</title>
   @vite('resources/js/app.js')
</head>

<body>
    @include('header')
    @yield('content')
    @include('footer')
</body>
</html>