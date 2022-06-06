<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('title')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('head')
</head>

<body class="text-sm text-slate-600">

    <x-app.nav />

    @yield('content')

    <x-app.footer />

</body>
    @yield('script')
</html>
