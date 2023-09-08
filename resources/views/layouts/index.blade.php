<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('V3R')</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo_v3r_n_et_blanc.eps') }}" alt=""></a>
        <a href="{{ route('about') }}">À propos</a>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
</body>
</html>