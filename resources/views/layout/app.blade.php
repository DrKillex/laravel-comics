<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('layout.partials.header')
    @yield('main')
    @include('layout.partials.footer')
</body>
</html>