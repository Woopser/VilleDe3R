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
        <a id="nav-logo" href=""><img src="{{ asset('img/logo_v3r_n_et_blanc.svg') }}" alt="Logo" width="60"></a>
        <a id="nav-hamburger" href="javascript:void(0);" class="icon" onclick="toggleMenu()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </a>
        <div id="nav-links">
            <a class="nav-link" href="">Accueil</a>
            <a class="nav-link" href="">À propos</a>
            <a class="nav-link" href="">Contact</a>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div>
            
        </div>
    </footer>
</body>
</html>
<script src="{{ asset('js/ville3R.js') }}"></script>