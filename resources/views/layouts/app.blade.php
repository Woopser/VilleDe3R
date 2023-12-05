<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('V3R')</title>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a id="nav-logo" href="{{route('menus.index')}}"><img src="{{ asset('img/logo_v3r_blanc.svg') }}" alt="Logo" width="60"></a>
        <a id="nav-hamburger" href="javascript:void(0);" class="icon" onclick="toggleMenu()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </a>
        <div id="nav-links">
            <a class="nav-link" href="{{route('menus.index')}}"><h1 class="nav-link-text">Accueil</h1></a>
            <a class="nav-link" href="{{route('lien.index')}}"><h1 class="nav-link-text">Liens Utiles</h1></a>
            @if(Session::get('role') == "admin") 
            <a class="nav-link" href="{{route('lien.spindex')}}"><h1 class="nav-link-text">Ajouter une ressource</h1></a>
            @endif
            <form action="{{ route('users.logout') }}" method="POST" class="w-100">
                @csrf
                <button type="submit" class="nav-link w-100"><h1 class="nav-link-text">Déconnexion</h1></button>
            </form>
        </div>
    </nav>
    <div id="nav-filter"></div>

    <!-- Content -->
    <div id="content-body">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div >
            
        </div>
    </footer>
</body>
</html>
<script src="https://kit.fontawesome.com/7cd2227a76.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/ville3R.js') }}"></script>
