<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="I am me">
    <title>JL - @yield('title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
{{ $slot }}
@livewireScripts
</body>
</html>
