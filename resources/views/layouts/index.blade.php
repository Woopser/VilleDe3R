<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('V3R')</title>
</head>
<body id="body">
    <!-- Navbar -->
    <nav>
        <a ><img src="{{ asset('img/logo_v3r_n_et_blanc.eps') }}" alt=""></a>
        <a >À propos</a>
    </nav>

    <!-- Content -->
    @yield('contenu')

    <!-- Footer -->
</body>
</html>